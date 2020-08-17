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
Route::get('/controldeacceso', 'SyscomController@acceso');

Route::get('/videovigilancia', 'SyscomController@videov');

Route::get('/redesinalambricas', 'SyscomController@redes');

Route::get('/networking', function () {
    return view('main');
});
Route::get('/cableadoestructurado', 'SyscomController@cableado');

Route::get('/deteciondefuego', 'SyscomController@fuego');

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

//  -->  POST
Route::post('contacto','MessagesController@store');
