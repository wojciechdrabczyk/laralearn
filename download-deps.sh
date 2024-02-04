docker run --rm     -u "501:20"     -v "/Users/wojtek/dev/laralearn:/var/www/html"     -w /var/www/html     laravelsail/php82-composer:latest     composer install --ignore-platform-reqs
