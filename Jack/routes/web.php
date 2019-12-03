<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

use App\Mail\ContactMail;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

// remember you have to have this named for Laravel to pick up on the routing
// for anyone not signed in
Route::get('/login', "Auth\AuthController@login")->name('login');
Route::post('/login', "Auth\AuthController@postLogin");
Route::get('/logout', "Auth\AuthController@logout")->name('logout');
Route::get('/login/confirm/{token}', 'Auth\AuthController@authenticate');



// broken up for more verboseness
// Route::resource('arts', 'ArtsController');

Route::get("/arts", 'ArtsController@index')
    ->name('arts');
Route::get('/arts/create', 'ArtsController@create')
    ->middleware('auth')
    ->name('arts.create');
Route::post('/arts/create', 'ArtsController@store')
    ->name('arts.store')
    ->middleware('auth');
Route::get('/arts/{art}', 'ArtsController@show')
    ->name('arts.show');
Route::get('/arts/{art}/edit', 'ArtsController@edit')
    ->name('arts.edit')
    ->middleware('auth');
Route::put('/arts/{art}', 'ArtsController@update')
    ->name('arts.update')
    ->middleware('auth');



// so the contact page is actually emailing primary user with 
// a blade template, so css makes it look a little nicer
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::post('/contact', function(Request $request){
    Mail::send(new ContactMail($request));
    return redirect('/');
});