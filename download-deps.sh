docker run --rm     -u "1000:1000"     -v "/home/lycal/dev/laralearn:/var/www/html"     -w /var/www/html     laravelsail/php82-composer:latest     composer install --ignore-platform-reqs
