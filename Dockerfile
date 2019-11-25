FROM debian:buster

COPY srcs/localhost.conf /home/
COPY srcs/index.html /home/

RUN apt-get update && apt-get -y upgrade && apt-get -y install nginx

EXPOSE 80

CMD service nginx start && tail dev/random
