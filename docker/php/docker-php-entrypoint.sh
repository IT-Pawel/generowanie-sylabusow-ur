#!/bin/bash

cd /var/www/app

npm install > /dev/null 2>&1
composer install

php artisan migrate

service cron start

set -e

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- php-fpm "$@"
fi

exec "$@"
