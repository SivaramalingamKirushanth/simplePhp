# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Copy application code
COPY . /var/www/html
#just a simple comment
# Expose port 80
EXPOSE 80