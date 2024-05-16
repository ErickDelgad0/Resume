FROM php:apache

# Installs needed extensions to use pdo_connect 
# and mysqli to connect to phpmyadmin
RUN docker-php-ext-install pdo pdo_mysql mysqli

