FROM alpine:latest

RUN apk update && apk upgrade

ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.16.3_linux_i386.tar.gz telegraf.tar.gz
RUN tar xzfv telegraf.tar.gz
RUN rm telegraf.tar.gz

CMD ["telegraf"]