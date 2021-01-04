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
    return view('auth.login');
});

Route::get('/admin/cambiar', function () {
    return view('auth.passwords.confirm');
});


Route::get('contactanos', function(){
    return "hola desde la pagina de contacto";
})->name('contactos');


//Rutas con nombres
/*
Route::get('/',function(){
    echo "<a href='/contactanos'>contactos 1</a><br>";
    echo "<a href='/contactanos'>contactos 2</a><br>";
    echo "<a href='/contactanos'>contactos 3</a><br>";
    echo "<a href='/contactanos'>contactos 4</a><br>";
    echo "<a href='/contactanos'>contactos 5</a><br>";
});


Route::get('/',function(){
    echo "<a href='" . route('contactos') . "'>contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'</a>contactos 2<br>";
    echo "<a href='/contactanos'>contactos 3</a><br>";
    echo "<a href='/contactanos'>contactos 4</a><br>";
    echo "<a href='/contactanos'>contactos 5</a><br>";
});
*/

Route::get('/contacto', function(){
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
