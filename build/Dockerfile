FROM php:apache-bullseye
COPY ./html /var/www/html/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# git is required by composer
RUN apt-get update && apt-get install -y git
# RUN composer install
WORKDIR /var/www/html
RUN apt-get install -y sudo
RUN usermod -aG sudo www-data
RUN echo '%sudo ALL=(ALL) NOPASSWD:/sbin/shutdown' >> /etc/sudoers
