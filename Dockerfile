FROM php:7.3-alpine
COPY . /usr/src/app
WORKDIR /usr/src/app
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
