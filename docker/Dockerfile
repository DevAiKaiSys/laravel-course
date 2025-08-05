FROM php:8.2-cli

# ติดตั้ง extension ที่ Laravel ต้องใช้
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ตั้ง working directory
WORKDIR /var/www/html

# คัดลอกโปรเจกต์เข้า container
COPY ../firstwebsite .

# ติดตั้ง Laravel dependencies
RUN composer install

# เปิด port 8000 และรัน Laravel dev server
CMD php artisan serve --host=0.0.0.0 --port=8000

