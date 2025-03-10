# iban-lookup
IBAN powered bank information lookup service





# initial setup

These commands where used to setup the application initially.

* `docker run -it --rm -v "$(pwd):/app" -w /app laravelsail/php84-composer:latest bash -c "composer global require laravel/installer && ~/.composer/vendor/bin/laravel new src"`
* `cd src && mkdir node_modules`
* `docker run --rm -v "$(pwd)":/app -w /app laravelsail/php84-composer:latest php artisan sail:install`
* `./vendor/bin/sail up`
* `./vendor/bin/sail npm install`
* `./vendor/bin/sail npm run dev`

