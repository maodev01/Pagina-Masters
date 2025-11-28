#!/bin/bash
set -e

# 1. Configurar el puerto de Apache dinámicamente
# Railway inyecta la variable $PORT. Si no existe, usa 80 por defecto.
echo "Configurando Apache en el puerto ${PORT:-80}..."
sed -i "s/Listen 80/Listen ${PORT:-80}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT:-80}>/" /etc/apache2/sites-available/000-default.conf

# 2. Corregir el error AH00558 (ServerName)
# Esto evita que Apache intente resolver DNS al inicio, acelerando el arranque.
echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 3. Optimización de Laravel en tiempo de ejecución
# Es vital correr esto AQUÍ y no en el build, porque las variables de entorno (.env) 
# de Railway solo existen cuando el contenedor arranca.
echo "Cacheando configuración de Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Iniciar Apache en primer plano
echo "Iniciando Apache..."
exec apache2-foreground