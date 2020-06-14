FROM php:7.4.1-apache

#COPY . /var/www/html

RUN docker-php-ext-install pdo_mysql

#COPY .docker/php/php.ini /usr/local/etc/php/

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY .docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini