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

# #Importing OS
# FROM alpine:latest

# RUN apk update && apk upgrade
# RUN apk add mysql mysql-client openrc

# #Copying all what needed
# COPY srcs/start.sh /
# #COPY srcs/my.cnf etc/my.cnf
# #RUN  rc default
# #RUN  rc-service mariadb start

#RUN mkdir /var/run/mysqld
#RUN mkfifo /var/run/mysqld/mysqld.sock
#RUN chown -R mysql /var/run/mysqld

#VOLUME ["/sys/fs/cgroup"]
#VOLUME "/var/lib/mysql"

#Showing which ports to listen
EXPOSE 3306

CMD ["sh", "start.sh"]