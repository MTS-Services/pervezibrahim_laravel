#!/bin/sh
set -e

# Fix permissions (important if you use volumes)
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache || true
chmod -R 775 /var/www/storage /var/www/bootstrap/cache || true

# Laravel production prep
php artisan storage:link || true
php artisan migrate --force || true
php artisan config:cache || true
php artisan view:cache || true

# Start services
exec /usr/bin/supervisord -n
