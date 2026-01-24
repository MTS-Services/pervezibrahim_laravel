#!/bin/bash
set -e

echo "Setting up Laravel application..."

# Ensure storage and cache directories exist
mkdir -p /var/www/storage/framework/{sessions,views,cache}
mkdir -p /var/www/storage/logs
mkdir -p /var/www/bootstrap/cache

# Fix permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Create .env if it doesn't exist
if [ ! -f /var/www/.env ]; then
    echo "Creating .env file..."
    cp /var/www/.env.example /var/www/.env || echo "APP_ENV=production" > /var/www/.env
fi

# Laravel production prep
php artisan storage:link || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Run migrations (only if DB is configured)
php artisan migrate --force || echo "Migration skipped"

# Start services
echo "Starting Supervisord..."
exec /usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf