FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

RUN apk add curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html