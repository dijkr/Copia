# Apache
dnf install -y httpd
systemctl enable httpd
firewall-cmd --permanent --zone=public --add-service=http
firewall-cmd --permanent --zone=public --add-service=https

# PHP
dnf module list php
dnf -y install php php-fpm php-zip php-intl php-opcache php-gd php-mbstring php-gd php-xml php-mysqlnd

# Maria DB
dnf -y install mariadb-server.x86_64
systemctl enable mariadb
firewall-cmd --permanent --add-service=mysql

# Services
systemctl reload firewalld
systemctl restart httpd
systemctl reload httpd
systemctl restart mariadb
