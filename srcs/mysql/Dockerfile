FROM alpine:latest

RUN apk update && apk upgrade

RUN apk add mysql mysql-client openrc
RUN mkdir "/run/mysqld"
RUN chown -R mysql /run/mysqld
COPY ./srcs/my.cnf /etc
COPY ./srcs/start.sh ./
COPY ./srcs/mysql_conf.sql /etc
COPY ./srcs/wordpress.sql /etc
RUN chmod u+x start.sh

#Showing which ports to listen
EXPOSE 3306

CMD ["sh", "start.sh"]