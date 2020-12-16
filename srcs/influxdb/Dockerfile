FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add influxdb

COPY srcs/start.sh .
RUN chmod u+x /start.sh

EXPOSE 8086

CMD [ "sh" , "/start.sh" ]