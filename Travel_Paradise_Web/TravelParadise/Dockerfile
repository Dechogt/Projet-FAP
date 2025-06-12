FROM php:8.3-cli

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install pdo pdo_pgsql zip

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet
COPY . .

# Corriger le warning git ownership dans Docker
RUN git config --global --add safe.directory /var/www/html

# Installation des dépendances PHP
RUN composer install --optimize-autoloader

# Exposer le port
EXPOSE 8000

# Commande par défaut
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
