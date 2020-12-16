FROM alpine:latest

RUN apk update && apk upgrade

RUN apk add php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session nginx
RUN mkdir -p /run/nginx
WORKDIR /www
ADD https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz phpMyAdmin.tar.gz
RUN tar xzfv phpMyAdmin.tar.gz --strip-components 1
COPY srcs/config.inc.php ./
COPY srcs/start.sh /
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
RUN chmod u+x /start.sh

EXPOSE 5000

CMD [ "sh" , "/start.sh" ]