FROM php:8.4-fpm
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    unzip && docker-php-ext-install zip
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ADD . /var/www/html
WORKDIR /var/www/html

RUN composer install
