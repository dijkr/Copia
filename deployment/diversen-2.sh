# Diversen
cd /var/www/html/copia.nl
php artisan key:generate
php artisan migrate
dnf module list nodejs
dnf module install nodejs:16/common
dnf -y install npm

# Database vullen
cd /var/www/html/copia.nl/deployment
./database.sh

# Permissions
chown -R apache:apache /var/www/html/copia.nl
find /var/www/html/copia.nl -type d -exec chmod 755 {} \;
find /var/www/html/copia.nl -type f -exec chmod 644 {} \;
chcon -R -t httpd_sys_rw_content_t /var/www/html/copia.nl
setsebool httpd_can_network_connect 1
setsebool -P httpd_can_network_connect_db on

# Optimaliseren applicatie
cd /var/www/html/copia.nl
php artisan config:cache
php artisan route:cache
php artisan view:cache
php please stache:warm
php artisan storage:link
rm node_modules/ -rf
npm install
npm run build
composer install --optimize-autoloader --no-dev

# Herladen Apache-configuratie
systemctl reload httpd