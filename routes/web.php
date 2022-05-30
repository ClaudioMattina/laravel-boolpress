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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->get('/admin', 'Admin\HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');


/* middleware filtra, in questo caso chi è loggato */
/* namespace('Admin) specifica la cartella dove si trova il controller che poi porterà alla corrispettiva view */
/* prefix aggiunge 'admin' come prefisso agli URI */
/* name aggiunge ai nomi il prefisso 'admin.' */

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    /* si inserisce le rotte per chi è loggato */
    Route::get('/','HomeController@index');

    Route::resource('posts','PostController');
});

Route::get('/contacts', 'ContactController@contact')->name('guest.contact');

/* qualunque rotta sbagliata porterà a questa view */
Route::get("{any?}", function(){
    return view('guest.home');
})->where("any",".*");
