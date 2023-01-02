Recourse controllers

Bascly is a controller with main methods

index
update
show
destroy
store

Whe can reate a Resource controller route
Route::resource('link', ClassController:class)

php artisan make:controller NameController -i    (to create recourse methods)

I can create a group of resources

//plural
Route:resources([
    '/tags' => TagController::class,
    '/task' => TaskController::class,
]);


I can specify the accessable method:


Route::resource('link', ClassController:class)->only('store')

Only
Route::resource('link', ClassController:class)->except(['store', 'index'])



## Customizing your recourses controller, index will call different default method

Route::recourse('/activities', ActivityControlle::class)->names([
    'index' => 'activities.all',
    'show' => 'activities.view',
]);