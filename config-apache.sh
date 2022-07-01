#!/bin/bash

clear
echo "==================================="
echo "       Configuração Apache         "
echo "==================================="

echo "Apache2 Permissões..."
sudo usermod -a -G www-data vscode
sudo usermod -a -G vscode www-data

echo "Apache2 Modulos..."
sudo a2enmod rewrite headers ssl
sudo service apache2 restart

echo "Parando Apache..."
sudo service apache2 stop

# Define as permissões para www-data
sudo chown -R www-data:www-data ./public/
sudo chmod -R g+w ./public/
sudo chmod -R g+w /etc/apache2/
sudo chown -R www-data:www-data -R /etc/apache2/ 

#Substituição de dados para configuração do Apache
sed 's+WORKSPACE_PATH+'$PWD'+g' ./.devcontainer/apache-site.conf > /etc/apache2/sites-available/000-default.conf

echo "Iniciando Apache..."
sudo service apache2 start