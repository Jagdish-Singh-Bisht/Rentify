# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable PHP extensions you need (example: mysqli, pdo, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP app into the container
COPY . /var/www/html/

# Give proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Apache will run automatically
EXPOSE 80
