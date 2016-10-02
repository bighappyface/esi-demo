#!/bin/bash

# Install Apache and PHP
sudo yum install httpd php -y

# Link /var/www/html to mounted directory
sudo rm -rf /var/www/html
sudo ln -s /vagrant /var/www/html

# Enable Apache at boot
chkconfig httpd on

# Start Apache
sudo service httpd restart
