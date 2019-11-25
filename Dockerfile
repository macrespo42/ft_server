FROM debian:buster
COPY src/nginx.conf ./home/
COPY src/index.html ./home/
RUN apt-get -y update && apt-get -y upgrade && apt-get -y install nginx
RUN mkdir -p /var/www/localhost
RUN cp /home/index.html /var/www/localhost/index.html
RUN cp /home/nginx.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default
EXPOSE 80
CMD service nginx start && tail -f /dev/null
