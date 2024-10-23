# Utilisation une image PHP avec Apache préconfiguré
FROM php:7.4-apache

# Copie des fichiers de mon projet dans le répertoire de l'image Docker
COPY . /var/www/html/

# droits à Apache sur le répertoire
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80
