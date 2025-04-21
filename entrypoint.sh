#!/bin/sh
# Corriger les permissions sur les dossiers critiques
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exécuter la commande passée en argument (ex : php-fpm)
exec "$@"

