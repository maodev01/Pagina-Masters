FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    nodejs \
    npm \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Configure DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# 1. Copia archivos de dependencias
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# 2. Instala Composer y dependencias de PHP
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# CORRECCIÓN: Agregado --no-scripts para que no falle al no encontrar la carpeta app/
RUN composer install --no-interaction --optimize-autoloader --no-dev --no-scripts

# 3. Instala dependencias de Node
RUN npm install

# 4. Copia el resto del código fuente
# Esto es vital hacerlo ANTES de npm run build y composer dump-autoload
COPY . .

# 5. Compila los assets (Vite/Mix)
# CORRECCIÓN: Movido aquí porque necesita los archivos de 'resources/' que copiamos arriba
RUN npm run build

# 6. Regenera el autoloader de Composer
# CORRECCIÓN: Necesario para vincular las clases de Laravel que copiamos en el paso 4
RUN composer dump-autoload --optimize

# Permisos
RUN chown -R www-data:www-data storage bootstrap/cache

# Configuración del Entrypoint
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Usar el script como punto de entrada
ENTRYPOINT ["docker-entrypoint.sh"]