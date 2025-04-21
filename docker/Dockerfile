FROM php:8.2-fpm-alpine

# Installer les dépendances système nécessaires
RUN apk add --no-cache \
    libxml2-dev \
    oniguruma-dev \
    libzip-dev \
    linux-headers \
    nodejs \
    npm

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql sockets mbstring xml

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail sur /var/www
WORKDIR /var/www

# Copier l'intégralité de l'application dans /var/www
COPY . .

COPY .env ./

# Installer les dépendances Node.js et construire les assets
RUN npm install && npm run build

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Créer les dossiers critiques et ajuster leurs permissions
RUN mkdir -p storage/logs storage/framework/cache storage/framework/views bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]

