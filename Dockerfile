FROM debian:buster
COPY srcs/nginx.conf ./home/
COPY srcs/index.html ./home/
COPY srcs/start.sh ./home/
COPY srcs/mysql_config.sh ./home/

#install services
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN apt-get install -y mariadb-server
RUN apt-get -y install php7.3 php-mysql php-fpm php-cli php-mbstring

#nginx config
RUN mkdir -p /var/www/localhost
RUN cp /home/index.html /var/www/localhost/index.html
RUN cp /home/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default

#mysql config
RUN bash ./home/mysql_config.sh

EXPOSE 80

CMD bash ./home/start.sh
