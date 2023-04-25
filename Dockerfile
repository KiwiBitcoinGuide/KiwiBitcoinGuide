FROM brettt89/silverstripe-web:8.1-apache
ENV DOCUMENT_ROOT /var/www/html
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY . $DOCUMENT_ROOT
WORKDIR $DOCUMENT_ROOT

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
RUN composer vendor-expose


