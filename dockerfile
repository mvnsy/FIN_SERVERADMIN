FROM php:7.4-apache
COPY ./index.php /var/www/html/index.html

RUN chown -R www-data:www-data /var/www/html/

RUN chmod -R ug+rwx /var/www/html/
RUN chmod -R o-wx /var/www/html/

RUN docker-php-ext-install mysqli
