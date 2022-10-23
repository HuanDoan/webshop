FROM php:8.1-apache

# ENV APACHE_DOCUMENT_ROOT /var/www/html
# WORKDIR ${APACHE_DOCUMENT_ROOT}

WORKDIR /var/www/html

# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Installing the dependencies
RUN apt-get update && apt-get install -y \
	zip \
	unzip \
	nano \
	git \
	curl \
	libzip-dev \
	libonig-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd \
	--with-freetype=/usr/include/ \
	--with-jpeg=/usr/include/

RUN docker-php-ext-install \
	pdo_mysql \
	mbstring \
	zip \
	exif \
	pcntl \
	mysqli \
	gd

RUN docker-php-ext-enable mysqli

# COPY php.ini "$PHP_INI_DIR/php.ini"

# Enable rewrite mode of apache2
RUN a2enmod rewrite

# Installing the composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

USER www-data

EXPOSE 80 443
