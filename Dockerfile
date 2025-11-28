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
    npm

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /app

COPY . /app

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-interaction --optimize-autoloader --no-dev
RUN npm install && npm run build

RUN chown -R www-data:www-data storage bootstrap/cache

# Copy custom virtualhost
COPY docker/laravel.conf /etc/apache2/sites-available/laravel.conf

RUN a2dissite 000-default.conf
RUN a2ensite laravel.conf

# Expose Railway port
EXPOSE 8080

CMD ["apache2-foreground"]
