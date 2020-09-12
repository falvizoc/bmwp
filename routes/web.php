<?php

App::setLocale('es');
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
    return view('main');
});

Route::get('pruebas/{id}','SyscomController@pruebas');

Route::get('controldeacceso', 'SyscomController@acceso')->name('access');

Route::get('videovigilancia', 'SyscomController@video')->name('video');

Route::get('redesinalambricas', 'SyscomController@redes')->name('wireless');

Route::get('categorias/{cat_id}', 'SyscomController@productbycat');

Route::get('productos/{product_id}', 'SyscomController@product');

Route::get('networking', function () {
    return view('main');
});

Route::get('cableadoestructurado', 'SyscomController@cableado')->name('swire');

Route::get('deteciondefuego', 'SyscomController@fuego')->name('fire');

Route::get('/fibraoptica', function () {
    return view('main');
});
Route::get('/microsoft', function () {
    return view('main');
});
Route::get('/antivirus', function () {
    return view('main');
});
Route::get('/computo', function () {
    return view('main');
});
Route::get('/almacenamiento', function () {
    return view('main');
});
Route::get('/polizas', function () {
    return view('main');
});
Route::get('/financieros', function () {
    return view('main');
});
Route::get('/foros', function () {
    return view('main');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/nnormalidad', function () {
    /*return view('main');*/
    return view('nuevanormalidad');
});

//  --> Métodos POST
Route::post('contacto','MessagesController@store');
