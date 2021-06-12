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

Route::get('/login', 'LoginController@login')->name("login");
Route::get('/logout', 'LoginController@logout')->name("logout");
Route::post('/login','LoginController@checkLogin');

Route::get('/register','RegisterController@register')->name("register");
Route::post('/register','RegisterController@create');
Route::get('register/username/{query}','RegisterController@checkUsername');

Route::get('/home','HomeController@home')->name("home");
Route::get('home/content','HomeController@contenutiHome');
Route::get('home/add/{t}','HomeController@addFavorite');
Route::get('home/remove/{t}','HomeController@removeFavorite');
Route::get('home/check','HomeController@checkFavorite');

Route::get('/scheda','SchedaController@scheda')->name("scheda");
Route::get('scheda/content','SchedaController@contenutiScheda');
Route::get('scheda/add/{e}','SchedaController@addScheda');
Route::get('scheda/remove/{e}','SchedaController@removeScheda');
Route::get('scheda/check','SchedaController@checkScheda');

Route::get('/nutrienti','NutrientiController@nutrienti')->name("nutrienti");
Route::get('nutrienti/search/{query}','NutrientiController@searchFoodData');
?>