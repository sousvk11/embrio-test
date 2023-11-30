#!/bin/sh

npm install && npm update

npm run build 
 
composer install && composer update 

chown -R www-data:www-data /var/www/html 

chmod -R 775 /var/www/html

php artisan serve