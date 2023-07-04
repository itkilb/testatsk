FROM devilbox/php-fpm:8.0-work

COPY composer.json /var/www/
WORKDIR /var/www
COPY . /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install