API recourse methods

access: api.php


Add api folder on USE 
use App\Http\Controllers\API\ContactController;


your route

Route::apiResource('/contacts', ContactController:class);


php artisan route:list --path=api