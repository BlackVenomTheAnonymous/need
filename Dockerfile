FROM php:7.4-apache

# Copy the application files to the container
COPY . /var/www/html

# Expose port 80 for Apache
EXPOSE 80
