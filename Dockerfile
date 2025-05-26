# Usa una imagen oficial PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copia todo el código al contenedor
COPY . /var/www/html/

# Da permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone puerto 80
EXPOSE 80

# Levanta Apache en foreground
CMD ["apache2-foreground"]
