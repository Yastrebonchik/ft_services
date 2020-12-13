#Importing OS
FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add nginx php7 php7-fpm php7-opcache php7-gd php7-mysqli \
php7-zlib php7-curl php7-mbstring php7-json php7-session \
openrc php-fpm

#Copying all what needed
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /www
RUN chown -R www:www /var/lib/nginx
RUN mkdir -p /run/nginx
WORKDIR /www
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz
RUN tar xzfv wordpress.tar.gz --strip-components 1
RUN rm -rf wordpress.tar.gz
COPY ./srcs/start.sh ./
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/wp-config.php .

RUN  chmod 777 start.sh

#Showing which ports to listen
EXPOSE 5050

CMD ["sh", "start.sh"]