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
    return view('main');
});
Route::get('/controldeacceso', function () {
    return view('main');
});
Route::get('/videovigilancia', function () {
    return view('main');
});
Route::get('/redesinalambricas', function () {
    return view('main');
});
Route::get('/networking', function () {
    return view('main');
});
Route::get('/cableadoestructurado', function () {
    return view('main');
});
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
    return view('main');
});
Route::get('/nuevanormalidad', function () {
    /*return view('main');*/
    return view('nuevanormalidad');
});
Route::post('contacto','MessagesController@store');

Route::get('/formulario', function () {
    return view('prueba');
});
