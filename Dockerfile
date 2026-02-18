FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy project
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Permission untuk storage & cache
RUN chmod -R 777 storage bootstrap/cache

# Expose Railway dynamic port
EXPOSE 8080

# Jalankan server sesuai PORT Railway
CMD php -S 0.0.0.0:${PORT} -t public

