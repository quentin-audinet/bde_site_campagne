FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

RUN mkdir /var/www/html/images

RUN mkdir /var/www/html/images/members /var/www/html/images/photos

RUN chown -R www-data:www-data /var/www/html/images /var/www/html/images/photos /var/www/html/images/members

COPY . /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
