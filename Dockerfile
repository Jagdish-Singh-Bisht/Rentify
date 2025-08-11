# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable PHP extensions you need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP app into the container
COPY . /var/www/html/

# Give proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Change Apache to listen on Render's $PORT
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf \
    && sed -i 's/:80/:${PORT}/g' /etc/apache2/sites-available/000-default.conf

# Apache will run automatically
EXPOSE ${PORT}
