ARG PHPFPM_VERSION
FROM php:${PHPFPM_VERSION}-fpm

COPY ./php.ini /usr/local/etc/php/

# XDEBUG
ARG XDEBUG_VERSION
RUN pecl install xdebug-${XDEBUG_VERSION}
RUN docker-php-ext-enable xdebug

# BASE
RUN apt -y update
RUN apt install -y zip unzip libxrender1 libfontconfig libxext-dev libzip-dev libicu-dev
RUN docker-php-ext-install pdo_mysql zip intl

# PDF
RUN mkdir /root/.fonts
COPY fonts/ipaexg.ttf /usr/share/fonts/ipaexg.ttf
COPY fonts/ipaexm.ttf /usr/share/fonts/ipaexm.ttf

# GD
RUN apt install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libjpeg-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include --with-jpeg=/usr/include
RUN docker-php-ext-install -j$(nproc) gd

# COMPOSER
ARG COMPOSER_VERSION
RUN curl -sS https://getcomposer.org/installer | php -- --version=${COMPOSER_VERSION}
RUN mv composer.phar /usr/bin/composer

# NODE
ARG NODEJS_VERSION_MAJOR
RUN curl -fsSL https://deb.nodesource.com/setup_${NODEJS_VERSION_MAJOR} | bash -
RUN apt install -y nodejs
RUN rm -rf /var/lib/apt/lists/

# NPM
RUN npm install -g yarn

# redis install
RUN pecl install redis
RUN docker-php-ext-enable redis

EXPOSE 5173
