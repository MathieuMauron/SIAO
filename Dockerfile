FROM php:8.2-fpm

# 1. Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# 2. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Set working directory
WORKDIR /var/www

# 4. Copy project files
COPY . .

# 5. Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# 6. Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# 7. Expose port and start server
CMD php artisan migrate --force && php artisan config:cache && php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
