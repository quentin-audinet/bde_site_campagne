FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

COPY .  /var/www/html/

RUN chown -R www-data:www-data /var/www/html/images/photos /var/www/html/images/members

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
