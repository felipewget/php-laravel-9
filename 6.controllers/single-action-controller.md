## Single method controller

We can create a route that call a controller with a simple action controller then,
we dont't need specify who will be the method

on controller

public function __invoke()
{
    return view('welcome');
}

on Route:

Route::get('/single-action', WellcomeController::class);




php artisan make:controller NameController -i