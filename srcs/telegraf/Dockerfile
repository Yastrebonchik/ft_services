FROM alpine:latest

RUN apk update && apk upgrade

ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.16.3_linux_i386.tar.gz /
RUN tar xf ./telegraf-1.16.3_linux_i386.tar.gz
RUN cp -r ./telegraf-1.16.3/* /

CMD ["telegraf"]