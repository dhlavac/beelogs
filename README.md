# BeeLogs  
BeeLogs is an open source beekeeping management system that aims in helping beekeepers to better manage their colonies.  

## Installation  

**Requirements**  
- Git  
- MySQL  
- PHP7.2  
- Apache2  
- Composer

Once you've installed the required packages, follow these commands below to download and install BeeLogs.

    rm -rf /var/www/html  
    cd /var/www  
    git clone https://github.com/beelogs/beelogs.git html  

    cp .env.example .env  

    composer install  
    php artisan key:generate  
    php artisan migrate

    cd /var/www
    chmod -R 777 html
    chown -R www-data:www-data html

    a2enmod rewrite
    systemctl restart apache2

    a2dissite 000-default.conf
    nano /etc/apache2/sites-available/000-default.conf
    Change DocumentRoot /var/www/html to DocumentRoot /var/www/html/public
    a2ensite 000-default.conf
    systemctl reload apache2

## Licence  
BeeLogs is licensed under the General Public License version 3 (GPLv3).

In compliance with the MIT license BeeLogs is built upon the Laravel PHP Framework.
