FROM node:18.12.1 AS node
FROM php:8.1-fpm

# create user
ARG user
ARG uid
RUN useradd \
    -m \
    -G root \
    -u $uid \
    -d /home/$user \
    $user

# install dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    vim \
    git

# clean apt cache
RUN apt-get clean && rm -rf /var/lib/apr/lists/*

# install nodejs
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
RUN npm install --global npx

# install extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath zip gd

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

VOLUME /srv
USER $user
EXPOSE 9000
