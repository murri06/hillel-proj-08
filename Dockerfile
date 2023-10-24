 FROM php:8.2-alpine
 LABEL authors="ruslan"

 COPY . /var/www/html/

 WORKDIR /var/www/html/
