FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql



RUN mkdir /var/www/html/tmp

COPY . /var/www/html/

COPY ./images/* /var/www/html/tmp/

RUN chown -R www-data:www-data /var/www/html/images /var/www/html/images/photos /var/www/html/images/members

RUN cp -r /var/www/html/tmp/* /var/www/html/images/

RUN rm -r /var/www/html/tmp

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
