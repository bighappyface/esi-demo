#!/bin/bash

# Install Apache and PHP
sudo yum install httpd php -y

# Set permissions
sudo chown -R vagrant:vagrant /var/www/html

# Enable Apache at boot
chkconfig httpd on

# Start Apache
sudo service httpd restart
