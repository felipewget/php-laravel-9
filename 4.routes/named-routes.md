Named routes

Named routes allow the convenient generation of URLs or redirects for specific routes. 

Route::get('/user/profile', function () {
    //
})->name('profile');

Important: name of named routes need to be unique

then, we can call this route by name 
$url = route('profile');
redirect()->route('profile');
return to_route('profile');

Check if soe namid routes exist
if($request->route()->named('test))