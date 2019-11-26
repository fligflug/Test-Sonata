# [TEST] Sonata

### Installation

Clone the project on your computer then run the following commands:

```sh
$ cp .env.dist .env 
#configure DATABASE_URL environment variable in .env
$ composer install
$ npm install
$ php bin/console server:run
$ yarn run encore dev --watch
$ php bin/console doctrine:fixtures:load
```

Backoffice login url: http://localhost:8000/login 
Username : admin@admin.fr
Password: admin
