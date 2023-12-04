#!/bin/sh

npm install && npm update

npm run build 
 
composer install && composer update 

chown -R :www-data /var/www/html 

chmod -R 777 /var/www/html


php artisan serve  --port 8000 --host 0.0.0.0
