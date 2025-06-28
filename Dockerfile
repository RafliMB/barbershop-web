# Stage 1: Composer Install Dependencies
FROM composer:2.5 as vendor

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --prefer-dist

# Stage 2: PHP-FPM + Nginx
FROM php:8.2-fpm

# Install packages & PHP extensions
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    git \
    unzip \
    zip \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Set working dir
WORKDIR /var/www

# Copy project files
COPY . .

# Copy vendor from stage 1
COPY --from=vendor /app/vendor ./vendor

# Copy nginx config
COPY nginx.conf /etc/nginx/nginx.conf

# Copy entrypoint
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Set proper permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data .

# Laravel port via nginx
EXPOSE 80

# Start script
CMD ["/entrypoint.sh"]
