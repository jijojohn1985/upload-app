# Use an official PHP image with Apache
FROM php:8.1-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Grant proper permissions
RUN chown -R www-data:www-data /var/www/html/uploads

# Expose port 80
EXPOSE 80

# Enable Apache mod_rewrite (optional, but useful for many PHP apps)
RUN a2enmod rewrite

# Start Apache in the foreground
CMD ["apache2-foreground"]
