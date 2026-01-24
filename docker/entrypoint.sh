#!/bin/bash
set -e

echo "🚀 Starting Laravel Application..."

# Wait for database connection
echo "⏳ Waiting for database at ${DB_HOST}:${DB_PORT}..."
timeout=30
counter=0
until nc -z ${DB_HOST} ${DB_PORT} 2>/dev/null || [ $counter -eq $timeout ]; do
    echo "Waiting for database... ($counter/$timeout)"
    sleep 2
    counter=$((counter+1))
done

if [ $counter -eq $timeout ]; then
    echo "⚠️  Database connection timeout - continuing anyway"
else
    echo "✅ Database is reachable!"
fi

# Ensure storage directories exist
echo "📁 Creating storage directories..."
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/framework/cache/data
mkdir -p storage/logs
mkdir -p storage/app/public
mkdir -p bootstrap/cache

# Set proper permissions
echo "🔐 Setting permissions..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Check if .env exists, if not create from .env.production
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    if [ -f .env.production ]; then
        cp .env.production .env
    else
        cp .env.example .env
        php artisan key:generate --force
    fi
fi

# Clear and cache config
echo "⚙️  Optimizing application..."
php artisan config:clear || true
php artisan cache:clear || true
php artisan view:clear || true
php artisan route:clear || true

php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Create storage link
echo "🔗 Creating storage link..."
php artisan storage:link || true

# Run migrations
echo "🗄️  Running migrations..."
php artisan migrate --force || echo "⚠️  Migrations failed or skipped"

# Seed database if needed
# php artisan db:seed --force || true

echo "✅ Application is ready!"

# Start supervisord
echo "🎬 Starting services..."
exec /usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf