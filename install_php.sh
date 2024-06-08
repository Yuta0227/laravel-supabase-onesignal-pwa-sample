#!/bin/bash

# Update package list and install PHP and Composer
apt-get update
apt-get install -y php-cli composer

# Verify PHP installation
php -v

# Verify Composer installation
composer -v
