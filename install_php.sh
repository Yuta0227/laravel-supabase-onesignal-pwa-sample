#!/bin/bash

# Update package list and install PHP
apt-get update
apt-get install -y php-cli

# Run composer install
composer install
