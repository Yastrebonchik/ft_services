#Importing OS
FROM alpine:latest

#Nginx installation
RUN apk update && apk upgrade 
RUN apk add nginx openssl

#Copying all what needed
COPY srcs/start.sh /
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/example.crt /etc/ssl/certs/example.crt
COPY srcs/example.key /etc/ssl/private/example.key

#Removing default config of nginx
#RUN chown -R www-data var/www/html
RUN  chmod 777 start.sh
RUN  mkdir -p /run/nginx

#Showing which ports to listen
EXPOSE 80 443

#Docker run
CMD ["sh", "start.sh"]