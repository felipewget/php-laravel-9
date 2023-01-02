Artisan CLI & Tinker

Artisan is a command line interfacethar delp devs with Laravel

php artisan serve -> php built server

php artisan list -> list all commands

    -> php artisan route:list

if you use -h in finish og php artisan command you receive options
for example
php artisan serve
php artisan serve -h

php artisan make:controller -h

<img src="./img/help.php" />

php artisan tinker
-> interact wit your Laravel application from CLI
    -> send event
    -> request
    -> run commands

Send a simple input
    -> view('welcome')
    -> view('welcome')->render();
    -> Str::kebab("Helloword") // Laravel
    -> help
    -> doc(documentation)
        -> doc view
    

