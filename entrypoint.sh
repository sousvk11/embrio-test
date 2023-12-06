#!/bin/sh

npm install && npm update

npm run build 
 
composer install && composer update 

chown -R :www-data /var/www/html 

chmod -R 777 /var/www/html

service apache2 start

service apache2 status

service apache2 start

tail -f /etc/apache2/sites-available/000-default.conf
