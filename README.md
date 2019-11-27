# FT_SERVER

## What is it ?

ft_server is a 42 project, the goal is to create a Docker images based on
debian buster who run multiples services like an nginx, SSL protocol mysql,
phpMyAdmin and a wordpress.

## How to use ?

first you need to have docker installed and go to ft_server directory.

then just build the image with : `docker build -t ft_server .`
and run it with : `docker run -d -p 80:80 -p 443:443 --name name_of_container ft_server`

now you can type `https://localhost` in you favorite web browser and it works :)
