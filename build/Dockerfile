FROM phpearth/php:7.2-nginx

LABEL maintainer="Tran Minh Nhut <minhnhut37@gmail.com>"

COPY nginx.d/laravel.conf /etc/nginx/conf.d/default.conf

RUN apk add --no-cache php7.2-pdo_mysql 
RUN apk add --no-cache composer phpunit nodejs nodejs-npm
