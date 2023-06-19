# How to Contribute to The Kiwi Bitcoin Guide

Please write [an issue](https://github.com/KiwiBitcoinGuide/KiwiBitcoinGuide/issues/new) with your contribution

### Install instructions

* install apache or nginx
* install mysql or any other SQL DB
* Install PHP 8.0
* Install PHP extensions such as bcmath and any others required
    * sudo apt install php8.0-{imagick,bz2,curl,intl,mysql,readline,xml,fpm,mbstring,zip,bcmath,gd}
* Install composer https://getcomposer.com
* Clone the repo into your /var/www/ dir or another web serveable dir.
* In project root run "composer install"
* If there are missing extension errors then install any missing php-extensions using command above
* In project root run "composer vendor-expose" (this sets up resource and theme symlinks)
* Create an SQL database "nzbitcoiners" or any other name
* set up a user with permissions for that database
* rename .env.example to .env and set all db config
* go to http://localhost/nzbitcoiners/dev/build?flush=1 this will create the DB and flush/recreate the model
* if there are errors regards public/assets then chmod 777 this dir.
* if there are errors regards .htaccess permissions then delete public/assets/.htaccess and refresh the build & flush page

### Further reading

* [Silverstripe install instructions](https://docs.silverstripe.org/en/4/getting_started/)

### Docker

```
docker build -t silverstripe .
docker compose up
```
