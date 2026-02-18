FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Set permission
RUN chmod -R 775 storage bootstrap/cache

# Buat storage link
RUN php artisan storage:link

# Jalankan migration
RUN php artisan migrate --force

EXPOSE 8080

CMD php -S 0.0.0.0:${PORT} -t public


