## To call a template you can use view('tamplate-name')

ex: 
Route::get('/contacts', function(){
    return view('welcome');
});

This example is calling /resourcs/views/welcome.blade.php


I can use the same things that I use in routes Like:
<a href='{{route('contacts.index') }}'>All</a> // named route

if you check the folder /storage/framework/views, you will see that Laravel is creating
random view files, this files(1d76ca3e4c01689db2605ebd5cfb5d9f673dcb86.php) are cache if view
to optimize the performance

you can see in:

# Force create cache view files
php artisan view:cache

# Remove cache view files
php artisan view:clear

I can user compact to pass params to view...

use compact('hi') insted
$hi = [];
['hi' => $hi]