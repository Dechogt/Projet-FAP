FROM php:8.3-cli

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    nodejs \
    npm \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    curl \
    nodejs \
    npm \
    bash \
    procps \
    net-tools \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && npm install -g yarn \
    && rm -rf /var/lib/apt/lists/*

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copie des fichiers de dépendances Node.js
COPY package.json package-lock.json ./

# Copie du reste des fichiers
COPY . .

# Rendre le script exécutable
RUN chmod +x start.sh

# Corriger le warning git ownership dans Docker
RUN git config --global --add safe.directory /var/www/html

# Installation des dépendances PHP
RUN set -e; \
    composer install --optimize-autoloader --no-dev || \
    { [ -f .env ] || echo "APP_ENV=prod" > .env; } && \
    composer install --optimize-autoloader --no-dev

# RUN npm install && npm run build

EXPOSE 8000

# Commande par défaut
CMD ["./start.sh"]
