FROM php:7.4.15-apache
COPY website/ /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html
WORKDIR /var/www/html
EXPOSE 80

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli