## Controllers

https://laravel.com/docs/9.x/controllers

php artisan make:controller controlerName

For convention the name to one controller is nameOfControllerMoreCONTROLLER, in cammel case

index() return all
show() return one
store() create
destroy() remove
update() udpate

you can call from route a controller with

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Important: check if you imported the Controller: use App\Http\Controllers\ContactController;

we can create a ControllerRoute

Route::controller(Controller::class)->group(function(){
    //so you can use
    Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('contacts.show');
    // insted
    Route::get('/contacts/{id}', [ContactController::class, 'show'])->whereNumber('id')->name('contacts.show');
});

you can use
->name('contacts.') to change
Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('contacts.show');
to 
Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('show');

and to be a cleanner than ->name('contacts.show');

