FROM php:8.2.11-fpm

# Install dependencies
RUN apt-get update -y && apt-get install -y openssl zip unzip git cron libonig-dev zlib1g-dev libpng-dev libzip-dev nano mc
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install gd bcmath zip pdo pdo_mysql opcache pcntl
RUN pecl install -o -f redis xdebug\
    && docker-php-ext-enable redis \ 
    && docker-php-ext-enable xdebug

# Install nodejs
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN apt-get update --fix-missing
RUN apt-get install -y npm

RUN apt-get install gnupg wget -y && \
    wget --quiet --output-document=- https://dl-ssl.google.com/linux/linux_signing_key.pub | gpg --dearmor > /etc/apt/trusted.gpg.d/google-archive.gpg && \
    sh -c 'echo "deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list' && \
    apt-get update && \
    apt-get install google-chrome-stable -y --no-install-recommends && \
    rm -rf /var/lib/apt/lists/*
# Setup Laravel scheduler
# RUN (crontab -l 2>/dev/null; echo "* * * * * cd /var/www/app && /usr/local/bin/php artisan schedule:run >> /dev/null 2>&1") | crontab -

COPY docker-php-entrypoint.sh /tmp/docker-php-entrypoint.sh
RUN chmod +x /tmp/docker-php-entrypoint.sh

WORKDIR /var/www/app

ENTRYPOINT ["/bin/sh", "/tmp/docker-php-entrypoint.sh"]

CMD ["php-fpm"]
