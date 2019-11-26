FROM debian:buster
COPY src/nginx.conf ./home/
COPY src/index.html ./home/
COPY src/start.sh ./home/

#nginx config
RUN apt-get -y update && apt-get -y upgrade && apt-get -y install nginx
RUN mkdir -p /var/www/localhost
RUN cp /home/index.html /var/www/localhost/index.html
RUN cp /home/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default

#mysql config
RUN apt-get install -y mariadb-server
RUN service mysql start
#RUN echo "CREATE DATABASE wordpress;" | mysql -u root
#RUN echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';" | mysql -u root
#RUN echo "FLUSH PRIVILEGES;" | mysql -u root

EXPOSE 80

#CMD bash ./home/start.sh && tail -f /dev/null
# debug cmd
CMD bash
