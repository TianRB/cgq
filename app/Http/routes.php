<?php
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// FRONTEND
Route::get('/', 'FrontController@index');

//BACKEND
Route::auth();

Route::get('/home', function () {
    return view('backend.posts.index');
})->middleware(Authenticate::class);

Route::resource('/back/categories', 'CategoryController');
Route::resource('/back/posts', 'PostController');
