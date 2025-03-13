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
* `./vendor/bin/sail ps`
  * `src-mysql-1 ... Up About a minute (healthy)`
* `./vendor/bin/sail exec mysql mysql -u root -p`
  * _password_
* ```sql
  CREATE DATABASE IF NOT EXISTS laravel;
  GRANT ALL PRIVILEGES ON laravel.* TO 'sail'@'%';
  FLUSH PRIVILEGES;
  EXIT;
  ```
* `./vendor/bin/sail down`
* `./vendor/bin/sail up -d`
* `./vendor/bin/sail artisan migrate`
  * ```
    INFO  Preparing database.  

    Creating migration table ................................ 41.81ms DONE

    INFO  Running migrations.  

    0001_01_01_000000_create_users_table .................... 152.94ms DONE
    0001_01_01_000001_create_cache_table ..................... 46.21ms DONE
    0001_01_01_000002_create_jobs_table ..................... 119.63ms DONE
    ```
* `./vendor/bin/sail npm run dev`
* visit APP_URL: [http://localhost](http://localhost)