# Use an official PHP image with Apache as the base image.
#FROM php:8.2.12-fpm
FROM php:8.2-apache
ARG WORKDIR=/var/www/html
ENV DOCUMENT_ROOT=${WORKDIR}
ENV LARAVEL_PROCS_NUMBER=1
ENV NODE_MAJOR=20
ENV NVM_DIR /usr/local/nvm
ENV NODE_VERSION 20.5.0
ARG HOST_UID=1000
ENV USER=abc
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Set environment variables.
ENV ACCEPT_EULA=Y

# Install system dependencies.
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \ 
    #apache2\
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite
COPY ./laravel/apache-config.conf /etc/apache2/sites-available/000-default.conf    

RUN mkdir -p $NVM_DIR
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm use $NODE_VERSION \
    && ln -s "$(npm config get prefix)/bin/node" "/usr/local/bin/node" \
    && ln -s "$(npm config get prefix)/bin/npm" "/usr/local/bin/npm"
RUN npm update -g npm

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql

# Install Composer globally.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY ./entrypoint.sh /
RUN chmod +x /entrypoint.sh

WORKDIR $WORKDIR

RUN rm -Rf /var/www/html/*
ADD ./.env .
#ENTRYPOINT ["/entrypoint.sh"]
CMD ["/bin/bash", "-c", "/entrypoint.sh"]

