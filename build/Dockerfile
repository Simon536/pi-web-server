FROM php:apache-bullseye
COPY ./html /var/www/html/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
RUN apt update
# RUN apt install -y sudo
# RUN usermod -aG sudo www-data
# RUN echo '%sudo ALL=(ALL) NOPASSWD:/sbin/shutdown' >> /etc/sudoers
# RUN composer install
