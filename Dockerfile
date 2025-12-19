# Image officielle PHP 8.3 avec Apache
FROM php:8.3-apache

# Dossier de travail utilisé par Apache
WORKDIR /var/www

# -------------------------------------------------
# Installation des dépendances système
# - ca-certificates / openssl : nécessaires pour TLS (SMTP Gmail)
# - libicu-dev / libzip-dev : extensions PHP intl / zip
# - outils classiques pour projets PHP (git, zip, unzip)
# -------------------------------------------------
RUN apt-get update && apt-get install -y \
    ca-certificates \
    openssl \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    zip \
    pkg-config \
    \
    # Configuration et installation des extensions PHP
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        intl \
        zip \
    \
    # Installation de Xdebug via PECL
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    \
    # Nettoyage pour alléger l’image
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# -------------------------------------------------
# Apache : activation du module rewrite
# (indispensable pour MVC, routes propres, .htaccess)
# -------------------------------------------------
RUN a2enmod rewrite

# -------------------------------------------------
# Configuration Apache personnalisée
# (DocumentRoot, AllowOverride, etc.)
# -------------------------------------------------
COPY ./docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# -------------------------------------------------
# Configuration PHP globale (php.ini)
# -------------------------------------------------
COPY ./php/conf/php.ini /usr/local/etc/php/php.ini

# -------------------------------------------------
# Configuration Xdebug
# - un seul fichier = une seule source de vérité
# -------------------------------------------------
COPY ./php/conf/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini