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

//Forma de proteger rutas con middleware
Route::get('user/{name?}', function ($name) {
    return $name;
})->middleware('auth');


//Rutas resource
 Route::resource('pages', 'PagesController')->names('crud'); 

 //Validar string
 Route::get('formulario', 'FormController@index');
 Route::post('formulario', 'FormController@store')->name('guardar');

 //Validar number
 Route::get('formulario2', 'PruebaController@index');
 Route::post('formulario2', 'PruebaController@store')->name('guardar2');

