FROM php:apache-bullseye
COPY ./html /var/www/html/
RUN apt-get update && apt-get install -y sudo
WORKDIR /var/www/html
RUN usermod -aG sudo www-data
RUN echo '%sudo ALL=(ALL) NOPASSWD:/sbin/shutdown' >> /etc/sudoers
