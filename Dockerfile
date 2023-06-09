FROM php:8.1-fpm

ARG user=www-data
ARG uid=1000

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install a compatible version of Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN if ! id -u $user > /dev/null 2>&1; then useradd -G www-data,root -u $uid -d /home/$user $user; fi
RUN mkdir -p /home/$user/.composer && chown -R $user:$user /home/$user

WORKDIR /var/www
COPY . .
RUN chown -R $user:$user /var/www

USER $user

RUN composer install
RUN npm install
RUN npm run build
RUN composer require realrashid/sweet-alert
RUN composer require laravel/socialite
COPY .env.example .env

# Switch to root user, change ownership, and switch back to $user
USER root
RUN chown $user:$user .env
USER $user
RUN php artisan key:generate
# RUN php artisan migrate
# RUN php artisan db:seed
# RUN php artisan storage:link