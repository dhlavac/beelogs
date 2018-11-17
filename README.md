# BeeLogs
BeeLogs is an open source beekeeping management system that helps beekeepers to better manage their colonies.

## Installation

    rm -rf /var/www/html
    cd /var/www
    git clone https://github.com/beelogs/beelogs.git html

    cp .env.example.env

    composer install
    php artisan key:generate
    php artisan migrate

## Licence
BeeLogs is build upon the Laravel PHP Framework and licensed under the GPLv3.