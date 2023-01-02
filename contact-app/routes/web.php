<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "<h1>
    All contancts
        <div>
            <a href='" . route('contacts.index') . "'>All</a>
            <a href='" . route('contacts.create') . "'>Add Contact<a/>
            <a href='" . route('contacts.show', ['id' => 22]) . "'>Show contact<a/>
        </div>
    </h1>";
    // return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/contacts', function () {
        return "<h1>All contancts</h1>";
    })->name('contacts.index');

    Route::get('/contacts/{id}', function ($id) {
        return "contanct" . $id;
    })->whereNumber('id')->name('contacts.show');

    Route::get('/contacts/create', function () {
        return 'create';
    })->name('contacts.create');
});

Route::get('/rendering-view', function () {
    return view('welcome');
});

Route::fallback(function(){
    return "<h1>This page not exist</h1>";
});