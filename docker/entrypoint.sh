#!/bin/bash
set -e

echo "Starting Laravel Application..."

# Wait for database
if [ -n "$DB_HOST" ]; then
    echo "Waiting for database at $DB_HOST:$DB_PORT..."
    timeout=60
    counter=0
    until nc -z "$DB_HOST" "$DB_PORT" 2>/dev/null || [ $counter -eq $timeout ]; do
        echo "Waiting... ($counter/$timeout)"
        sleep 2
        counter=$((counter+1))
    done
    
    if [ $counter -eq $timeout ]; then
        echo "WARNING: Database connection timeout"
    else
        echo "Database is ready!"
    fi
fi

# Ensure directories exist
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/framework/cache/data
mkdir -p storage/logs
mkdir -p storage/app/public
mkdir -p bootstrap/cache

# Set permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Laravel setup
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true

php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

php artisan storage:link || true

# Run migrations
php artisan migrate --force || echo "Migrations skipped"

echo "Application ready!"

# Start supervisord
exec /usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf
```

## **Ensure Your File Structure:**
```
your-repo/
├── docker/
│   ├── nginx.conf
│   ├── supervisord.conf
│   └── entrypoint.sh
├── Dockerfile
├── composer.json
├── composer.lock
├── package.json
└── ... (other Laravel files)