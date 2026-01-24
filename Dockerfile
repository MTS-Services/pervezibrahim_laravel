FROM php:8.3-fpm

# Add custom php.ini file
COPY ./docker/php.ini /usr/local/etc/php/conf.d/custom.ini

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    supervisor \
    gnupg2 \
    ca-certificates \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js 20 LTS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy source
COPY . .

# Create required directories
RUN mkdir -p storage/framework/views \
    storage/framework/sessions \
    storage/framework/cache \
    storage/logs \
    storage/app/public \
    bootstrap/cache \
    /var/log/supervisor

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm install && npm run build

# Fix permissions (separate commands to avoid chaining issues)
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 /var/www/storage
RUN chmod -R 775 /var/www/bootstrap/cache

# Configure Nginx and Supervisor
RUN rm -f /etc/nginx/sites-enabled/default
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

COPY ./docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]