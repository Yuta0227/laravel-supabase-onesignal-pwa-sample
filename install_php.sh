#!/bin/bash

echo "Installing PHP and Composer..."

# Update package list and install PHP and Composer
apt-get update
apt-get install -y php-cli composer

# Verify PHP installation
php -v

# Verify Composer installation
composer -v

echo "PHP and Composer installation completed."
