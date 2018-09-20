<?php

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
Route::get('/', 'PagesController@index');

Route::get('/register', 'PagesController@register');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/events', 'PagesController@events');

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function() {
    Route::get('/admin', function() {
        if (Auth::user()->admin == 0) {
            return view('home');
        }
        else {
            $users['users'] = \App\User::all();

            // TODO: write this cleaner
            $controller = \App()->make('\App\Http\Controllers\PagesController');
            return $controller->callAction('admin', $parameters = array());
        }
    });

    Route::get('/logout', 'Auth\LoginController@logout');
    
});