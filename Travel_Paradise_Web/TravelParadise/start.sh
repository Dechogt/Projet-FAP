#!/bin/bash
set -e

echo "=== DEBUT DU SCRIPT DE DEMARRAGE ==="

echo "Attendre que la base de données soit prête..."
sleep 10

echo "Installation des dépendances..."
composer install --optimize-autoloader

echo "Nettoyage du cache..."
php bin/console cache:clear || echo "Cache clear failed, continuing..."

echo "Préchauffage du cache..."
php bin/console cache:warmup || echo "Cache warmup failed, continuing..."

echo "=== DEMARRAGE DU SERVEUR PHP ==="
echo "Serveur démarrant sur 0.0.0.0:8000..."
exec php -S 0.0.0.0:8000 -t public
