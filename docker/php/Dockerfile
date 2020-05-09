FROM php:7.2-fpm

# Common requirements
RUN apt-get update \
    && apt-get install -y unzip \
    && apt-get install -y curl \
    && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip \
    && apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install bcmath \
    && apt-get install -y \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/freetype2 \
        --with-png-dir=/usr/include \
        --with-jpeg-dir=/usr/include \
    && docker-php-ext-install gd  \
    && docker-php-ext-enable gd \
    && apt-get install -y libxml2-dev \
    && docker-php-ext-install soap \
    && rm -rf /var/lib/apt/lists/* \
    && curl -L -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm /tmp/composer-setup.php

# Development requirements
#RUN pecl install xdebug-2.6.0 && docker-php-ext-enable xdebug

WORKDIR /ewyii
COPY . /ewyii
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
RUN composer install --prefer-dist --no-interaction
VOLUME /ewyii
EXPOSE 9010

ENTRYPOINT ["docker/php/entrypoint.sh"]
CMD ["php-fpm"]
