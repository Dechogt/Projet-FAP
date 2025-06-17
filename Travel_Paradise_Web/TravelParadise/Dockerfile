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
    gnupg \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copie des fichiers de dépendances Node.js
COPY package.json package-lock.json ./

# Installation des dépendances Node.js
RUN npm install

# Copie du reste des fichiers
COPY . .

# Installation des dépendances PHP
RUN composer install --optimize-autoloader --no-dev

# Build des assets
RUN npm run build

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
