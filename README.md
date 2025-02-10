# iban-lookup
IBAN powered bank information lookup service

Available commands:

* `iban:validate {iban}`
  * Validates the given IBAN and prints out information about it.
* `iban:registry`
  * **WIP** Updates the IBAN database with registry from SWIFT.

# Development

## Using Sail on macOS

Requirements:
* [Docker](https://www.docker.com)
  * or Docker Desktop `brew install --cask docker`
  * or Docker `brew install docker`

*TODO*: Add info on how to setup application

[...]

* Download IBAN registry from: https://www.swift.com/standards/data-standards/iban-international-bank-account-number (TXT)
  * or https://www.swift.com/node/11971
* Store it as `./app/storage/app/private/utils/IBAN_Registry.txt`

[...]

# Initial setup

The initial setup of this application was done with [Sail](https://laravel.com/docs/11.x/installation#docker-installation-using-sail):

* `git clone https://github.com/time-wasters/iban-lookup.git && cd iban-lookup/`
* Start docker desktop on macOS
* `curl -s "https://laravel.build/src" | bash`
* *Optional*: Add alias `alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'` to your aliases file
* `cd src`
* `sail up` or `sail up -d` 
  * *Info*: This set the application key, too. If not, execute `sail artisan key:generate`
* `sail artisan migrate --seed`
* visit [http://localhost:80](http://localhost) to see Laravel start page

Applications

* Redis @ redis-1:6379
* Mailpit @ [::]:1025, [::]:8025 and http://localhost:8025/
* Selenium @ http://172.22.0.6:4444
* MySQL mysql-1:3306
* Mailisearch @ http://0.0.0.0:7700
* App @ http://0.0.0.0:80