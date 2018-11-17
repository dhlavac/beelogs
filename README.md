# BeeLogs  
BeeLogs is an open source beekeeping management system that helps beekeepers to better manage their colonies.  
  
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
    
    cp .env.example.env  
    
    composer install  
    php artisan key:generate  
    php artisan migrate
    
    cd /var/www
    chmod -R 777 html
    chown -R www-data:www-data html

## Licence  
BeeLogs is build upon the Laravel PHP Framework and licensed under the GPLv3.