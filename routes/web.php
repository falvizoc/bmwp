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
    return view('acceso');
});
Route::get('/videovigilancia', function () {
    return view('video');
});
Route::get('/redesinalambricas', function () {
    return view('inalámbricas');
});
Route::get('/networking', function () {
    return view('networking');
});
Route::get('/cableadoestructurado', function () {
    return view('estructurado');
});
Route::get('/fibraoptica', function () {
    return view('fibra');
});
Route::get('/microsoft', function () {
    return view('microsoft');
});
Route::get('/antivirus', function () {
    return view('antivirus');
});
Route::get('/computo', function () {
    return view('computo');
});
Route::get('/almacenamiento', function () {
    return view('almacenamiento');
});
Route::get('/polizas', function () {
    return view('polizas');
});
Route::get('/financieros', function () {
    return view('financieros');
});
Route::get('/foros', function () {
    return view('foros');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/nuevanormalidad', function () {
    return view('nuevanormalidad');
});

