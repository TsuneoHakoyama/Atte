FROM php:8.1.33-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update \
  && apt install -y \
  git \
  default-mysql-client \
  zlib1g-dev \
  libzip-dev \
  unzip \
  vim \
  && docker-php-ext-install \
  pdo_mysql \
  zip

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && composer self-update

# Install Node.js 22.x
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
  && apt-get install -y nodejs

RUN apt clean

RUN node -v && npm -v

WORKDIR /var/www