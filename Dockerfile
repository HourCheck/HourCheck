FROM php:8.2-apache
COPY . /var/www/html/
EXPOSE 80
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli