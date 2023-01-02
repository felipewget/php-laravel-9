## Fallback route

If your URL haven't any matches with your application routes, you can return a fallback(404)

Route::fallback(function(){
    return "<h1>This page not exist</h1>";
})