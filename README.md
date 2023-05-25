# Installation of `skyhighrealestate-backend`:

### Sail Installation
Note: Make sure you have `.env` file exists before running below command
```
sail up
```
Once sail is running you can access:

- Mail Hog on (http://localhost:8025/#)
- Telescope (http://localhost/telescope)

Run `sail artisan passport:keys --force` command for authentication setup


####Possible Error:
Can't connect to MySQL server on '172.18.0.5:3306' (111)
####Solution:
Delete docker using ` ./vendor/bin/sail down --rmi all -v` and again run `sail up`

#### Ubuntu Installation

```
 sudo apt-get install php8.0-mysql php8.0-mbstring php8.0-xml php8.0-bcmath php-curl php8.0-gd
 
```

##### Run Below commands from root folder:

```
composer install
cp .env.example .env
```

change db, mail etc. configs from `.env` file and then run below commands

```
php artisan migrate
php artisan db:seed
php artisan passport:install
php artisan passport:keys
```

Install `phpredis` [Installation Link](https://github.com/phpredis/phpredis/blob/develop/INSTALL.markdown)

Install `Redis` Cache on `Mac` [Reference Link](https://gist.github.com/tomysmile/1b8a321e7c58499ef9f9441b2faa0aa8)

```shell script 
brew update
brew install redis
```

Install `Redis` Cache
on `Ubuntu` [Reference Link](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-redis-on-ubuntu-18-04)

```shell script
sudo apt update
sudo apt install redis-server
```

## Testing

We are using `pest` for testing. To run a test run below command:
`./vendor/bin/pest --init`

### DNS Mask Setting

Edit `/usr/local/etc/dnsmasq.conf` file on Mac and add 


