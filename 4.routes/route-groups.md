## Route Groups

If I need to group a lot of routes inside a prefix or a middleware, or session, I can use 
route groups

Route::prefix('admin')->group(function(){
    Route::1
    Route::2
    Route::3
});

// All routes inside admin will receive /admin/route...

Route::middleware(['first', 'second'])->group(function () {
Route::controller(OrderController::class)->group(function () {
Route::domain('{account}.example.com')->group(function () {
Route::prefix('admin')->group(function () {
Route::name('admin.')->group(function () {