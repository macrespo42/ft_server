FROM debian:buster

COPY srcs/localhost.conf ./root/
COPY srcs/index.html ./root/

RUN apt-get update && apt-get -y upgrade && apt-get -y install nginx
RUN mkdir -p /var/www/localhost
RUN rm -f /etc/nginx/sites-enabled/default

RUN cp /root/localhost.conf etc/nginx/site-available/localhost
RUN cp /root/index.html /var/www/localhost/

RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/

EXPOSE 80
