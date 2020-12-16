#Importing OS
FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add nginx php7 php7-fpm php7-opcache php7-gd php7-mysqli \
php7-zlib php7-curl php7-mbstring php7-json php7-session openrc

#Copying all what needed
RUN mkdir -p /run/nginx
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
WORKDIR /www/
ADD https://wordpress.org/latest.tar.gz wordpress.tar.gz
RUN tar xzfv wordpress.tar.gz --strip-components 1
RUN rm -rf wordpress.tar.gz
COPY ./srcs/start.sh ./
COPY srcs/wp-config.php ./

RUN  chmod u+x start.sh

#Showing which ports to listen
EXPOSE 5050

CMD ["sh", "start.sh"]