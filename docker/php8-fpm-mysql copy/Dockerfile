FROM php:8.0-fpm-alpine

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN apk update && apk upgrade