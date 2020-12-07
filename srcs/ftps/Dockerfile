#Importing OS
FROM alpine:latest

# #Ftps installation
RUN apk update && apk upgrade 
RUN apk add vsftpd openssl openrc

#Copying all what needed
COPY srcs/start.sh /
COPY srcs/vsftpd.conf /etc/vsftpd
COPY srcs/example.crt /etc/vsftpd
COPY srcs/example.key /etc/vsftpd

RUN  chmod 777 start.sh
RUN  adduser -D admin && echo "admin:admin" | chpasswd
#Showing which ports to listen
EXPOSE 20 21

# #Docker run
CMD ["/start.sh"]