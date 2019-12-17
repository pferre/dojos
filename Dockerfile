FROM php:7.3-alpine
COPY . /usr/src/dojos
WORKDIR /usr/src/dojos
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
CMD ["composer", "install"]
