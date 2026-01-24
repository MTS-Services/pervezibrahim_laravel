FROM php:8.3-fpm

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
    netcat-openbsd \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js 20 LTS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy package files
COPY package*.json ./
RUN npm ci --only=production || npm install --only=production

# Copy application code
COPY . .

# Complete composer installation
RUN composer dump-autoload --optimize --no-dev

# Build frontend assets
RUN npm run build || echo "No build script found"

# Create required directories with proper structure
RUN mkdir -p storage/framework/sessions \
    storage/framework/views \
    storage/framework/cache/data \
    storage/logs \
    storage/app/public \
    bootstrap/cache \
    /var/log/supervisor

# Create php.ini if needed
RUN echo "upload_max_filesize = 500M" > /usr/local/etc/php/conf.d/custom.ini && \
    echo "post_max_size = 500M" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "max_execution_time = 600" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "max_input_time = 600" >> /usr/local/etc/php/conf.d/custom.ini && \
    echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/custom.ini

# Set permissions
RUN chown -R www-data:www-data /var/www && \
    chmod -R 775 /var/www/storage && \
    chmod -R 775 /var/www/bootstrap/cache

# Copy nginx configuration
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Copy supervisor configuration
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy and prepare entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]