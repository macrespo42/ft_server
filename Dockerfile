FROM debian:buster

COPY srcs/nginx.conf ./home/
COPY srcs/index.html ./home/
COPY srcs/start.sh ./home/
COPY srcs/mysql_config.sh ./home/
COPY srcs/self-signed.conf ./home/
COPY srcs/latest.tar.gz ./home/
COPY srcs/phpMyAdmin.tar.gz ./home/
COPY srcs/config-inc.php ./home

#install services
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx
RUN apt-get -y install openssl
RUN apt-get install -y mariadb-server
RUN apt-get -y install php7.3 php-mysql php-fpm php-cli php-mbstring

#nginx config
RUN mkdir -p /var/www/localhost
RUN cp /home/index.html /var/www/localhost/index.html
RUN cp /home/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default

#SSL protocol
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=75/L=Paris/O=42/CN=macrespo' -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
RUN cp /etc/nginx/sites-available/localhost /etc/nginx/sites-available/localhost.bak
RUN cp ./home/self-signed.conf /etc/nginx/snippets/self-signed.conf

#mysql config
RUN bash ./home/mysql_config.sh

#wordpress
RUN tar -xvzf ./home/latest.tar.gz -C /var/www/localhost/
RUN chown www-data: /var/www/localhost -R

#setup phpMyAdmin
RUN tar -xvf ./home/phpMyAdmin.tar.gz -C /var/www/localhost/
RUN mv /var/www/localhost/phpMyAdmin-4.9.1-english /var/www/localhost/phpMyAdmin
RUN cp ./home/config-inc.php /var/www/localhost/phpMyAdmin/

EXPOSE 80 443

CMD bash ./home/start.sh
