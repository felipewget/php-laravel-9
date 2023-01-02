https://laravel.com/docs/9.x/routing

php artisan route:list -h

Routes with method get

Route::get('/', function () {
    return view('welcome'); // resourses/view/welcome.blade.php
});

Route::get
Route::post
Route::put
Route::delete
Route::resource
Route::view('/welcome', 'welcome');
Route::redirect('/here', '/there', 301);
Route::match(['get', 'post'], '/', function () { // Accept get and post
Route::fallback

// Render HTML
Route::get('/contacts', function(){
    return '<h1>All contancts</h1>';
});

// Can I list only specified paths
php artisan route:list --path="contacts"

Passing params
Route::get('/contacts/{id}', function($id){
    return "All contanct" . $id;
});

Route::get('/companies/{name?}', function($name=null){
    return $name 
    ?  "Name: $name" 
    : "No name";
});

<hr />

Some routes needs some specific form of params, for example, id needs to be int, name needs to be string
```we can use regular expressions```

Route::get('/contacts/{id}', function($id){
    return "All contanct" . $id;
})->where('id', '[0-9]+');

Route::get('/companies/{name?}', function($name=null){
    return $name 
    ?  "Name: $name" 
    : "No name";
})->where('name', '[a-zA-Z]+');

so if name is a number, will o to 404

We don't need learn regular espressions to do that, whe can use
    ->whereNumber('id')
    ->whereAlpha('name')
    ->whereAlphanumeric('name') -> in this case needs to have numbers and text
    ->whereUuid('id'); -> Unique ID hash
    ->whereUlid('id'); -> Unique ID hash
    ->whereIn('category', ['movie', 'song', 'painting']);


