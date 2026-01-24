#!/bin/sh
set -e

# Fix permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Laravel production prep
php artisan storage:link || true
php artisan migrate --force || true
php artisan config:cache || true
php artisan view:cache || true

# Start services
echo "Starting Supervisord..."
exec /usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf