FROM php:8.2-fpm-alpine3.17

WORKDIR /var/www/html

ARG TIME_ZONE=Europe/Berlin

ENV XDEBUG_MODE=off

# Install build dependencies
RUN apk add --update --no-cache \
  freetype-dev \
  libpng-dev \
  libwebp-dev \
  libjpeg-turbo-dev \
  linux-headers \
  tzdata \
  zlib-dev

RUN apk add --no-cache --virtual .build-dependencies \
  $PHPIZE_DEPS \
  && docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install gd \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && apk del .build-dependencies

# Set timezone
RUN cp /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo "$TIME_ZONE" > /etc/timezone

# Activate ERROR_REPORTING
RUN echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/error_reporting.ini

# Activate Xdebug
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
  && echo "xdebug.discover_client_host=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Add composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
