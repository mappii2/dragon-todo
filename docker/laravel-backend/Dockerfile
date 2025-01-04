# 1. Base Image
FROM php:8.2-fpm

# 2. Install packages and extension modules
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-install pdo_mysql

# 3. Copy Composer (from composer:2 image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Set working directory
WORKDIR /var/www/html

# 5. Copy source code
#   (Here, copy all at build time.
#    For development, volume mount is OK for real-time updates)
# COPY . /var/www/html

# 6. Install dependencies
# RUN composer install --prefer-dist --no-scripts --no-dev && \
#     composer dump-autoload --optimize

# 7. Clear cache and config cache
# RUN php artisan config:clear \
#     && php artisan config:cache

# 8. PHP-FPM uses port 9000 by default
EXPOSE 9000

# 9. Command to run when container starts (start php-fpm)
CMD ["php-fpm"]
