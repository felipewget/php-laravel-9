Step 1. Be sure that you have a lot of patience hahahah
Step 2. Check Mysql is running
Step 3. Check .env
Step 4. To this app we will create contact_app database

The confiration about application is in config folder and the values of configuration is in .env...
the file is config/database.php

env() is afunction the Laravel provide to us ... 

env('ENV_DATA', 'IF value not exist, we return this value')

Connection example in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=