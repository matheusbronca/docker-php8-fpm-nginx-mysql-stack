FROM php:8.0-fpm-alpine

# Instala o MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copia o arquivo php.ini-production do container para o arquivo `php.ini`
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"


ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl 

# Atualiza os pacotes
RUN apk update && apk upgrade
