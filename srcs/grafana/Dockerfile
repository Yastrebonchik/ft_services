FROM alpine:latest

RUN apk update && apk upgrade && apk add --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat

WORKDIR /www
COPY srcs/start.sh .
ADD https://dl.grafana.com/oss/release/grafana-7.3.5.linux-amd64.tar.gz grafana.tar.gz
RUN tar -xvf grafana.tar.gz --strip-components 1
COPY srcs/dashboards.yaml conf/provisioning/dashboards/
COPY srcs/datasources.yaml conf/provisioning/datasources/
COPY ./srcs/json_configs/* /var/lib/grafana/dashboards/
COPY ./srcs/json_configs/* conf/provisioning/dashboards/json/
RUN chmod u+x start.sh

EXPOSE 3000

CMD ["sh", "start.sh"]