FROM php:7.3-fpm

RUN apt-get update
RUN apt-get install -y libzip-dev
RUN apt-get update

RUN docker-php-ext-install pdo_mysql zip