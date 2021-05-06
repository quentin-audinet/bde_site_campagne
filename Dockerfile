FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql



RUN mkdir /var/www/html/tmp

RUN mkdir /var/www/html/tmp/treasure_chase

RUN mkdir /var/www/html/tmp/treasure_chase/photos /var/www/html/tmp/treasure_chase/chemins

COPY . /var/www/html/

COPY ./images/* /var/www/html/tmp/

RUN chown -R www-data:www-data /var/www/html/images /var/www/html/images/photos /var/www/html/images/members

RUN cp -r /var/www/html/tmp/* /var/www/html/images/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
