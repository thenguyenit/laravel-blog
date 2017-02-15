#### Setup source code
1. The application is built base on Laravel framework: https://laravel.com/docs/5.3 , so we need install some dependence libraries:
* Composer
```
$ sudo apt-get install composer
```
* NodeJS and npm
```terminal 
$ sudo apt-get install nodejs
```
* Gulp
```terminal 
$ npm install -g gulp
```
* Clone source code from https://bitbucket.org/rainbowsoftware/onelotto 

* Go to document root of source code and install **node modules and libraries**

#### Setup database
* Create a empty database
* Run command line create database structure from Laravel migrations
```terminal 
/var/www/onelotto$ php artisan migrate
```

* Importing initial data from _/var/www/onelotto/database/sql/seeds/initial-data.sql_

#### Setup v-host
The application is using domain https://www.onelotto.com for two repositories
1. https://www.onelotto.com => /var/www/onelotto/public
2. https://www.onelotto.com/news  => /var/www/onelottoblog
3. https://www.onelotto.com/News  => /var/www/onelottoblog

#### Setup queue
The application using queue for sending email. Supervisor ( http://supervisord.org/index.html ) is a process monitor for the Linux operating system, and will automatically restart your queue:work process if it fails.

* Install supervisor
```
$ sudo apt-get install supervisor
```
* Configuring supervisor
Supervisor configuration files are stored in the _/etc/supervisor/conf.d_ directory. Let’s create a _onelotto-worker.conf_ file that starts and monitors a queue process:
```
[program:onelotto-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/onelotto/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/onelotto/storage/logs/worker.log
```

#### Setup crontab
The application using crontab service for executing some tasks on server.
* Configuring supervisor
```
$ crontab -e
```
* This Cron will call OneLotto command every minute.
````
* * * * * php /var/www/onelotto/artisan schedule:run
````

#### Setup balancing
If the application have a load balancer, we need configuring proxy servers, add config below to .env file
```
;Seperate character between IPs is ,
PROXIES=10.16.31.13,10.16.31.14
```

## Official Documentation

Documentation for [OneLotto](https://rainbowsoftware.atlassian.net/wiki/display/OLTD/Lottery+-+Technical+Documentation).
