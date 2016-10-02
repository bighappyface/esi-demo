#!/bin/bash

# Setup EPEL
yum install epel-release -y

# Configure Varnish 4.1 RPM
rpm --nosignature -i https://repo.varnish-cache.org/redhat/varnish-4.0.el6.rpm

# Install Varnish
yum install varnish -y

# Set permissions
sudo chown -R vagrant:vagrant /etc/varnish

# Copy VCL
cp /vagrant/default.vcl /etc/varnish/default.vcl
mkdir -p /etc/varnish/test

# Enable Varnish at boot
chkconfig varnish on

# Start Varnish
sudo service varnish restart
