#7.3 to 7.3 for examplo
sudo a2dismod php7.3
sudo a2enmod php7.2
sudo service apache2 restart

#if necessary force update files and restart apache
sudo update-alternatives --set php /usr/bin/php7.2
sudo update-alternatives --set phar /usr/bin/phar7.2
sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.2
sudo update-alternatives --set phpize /usr/bin/phpize7.2
sudo update-alternatives --set php-config /usr/bin/php-config7.2
sudo service apache2 restart

