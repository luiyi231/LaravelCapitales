FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql zip

# Copia todo el código al contenedor
COPY . /var/www/html/

# Crea las carpetas necesarias (por si no existen)
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache

# Cambia permisos para que Apache pueda escribir
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80 para Apache
EXPOSE 80

CMD ["apache2-foreground"]
