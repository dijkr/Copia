# Kopie afbeeldingen Statamic
cp -rf /var/www/html/copia.nl/deployment/public/ /var/www/html/copia.nl/storage/app/

# Apache configuratie
yes | cp /var/www/html/copia.nl/deployment/httpd.conf /etc/httpd/conf/httpd.conf

# Composer installeren
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
cd /var/www/html/copia.nl
composer update
