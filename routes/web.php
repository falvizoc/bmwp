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
//*************        Rutas del portafolio
Route::get('cableadoFibra', function () {
    return view('cableadoFibra');
});
Route::get('seguridadInformatica', function () {
    return view('seguridadInformatica');
});
Route::get('redesInalambricas', function () {
    return view('redesInalambricas');
});
Route::get('videoVigilancia', function () {
    return view('videoVigilancia');
});
Route::get('controlAcceso', function () {
    return view('controlAcceso');
});
Route::get('automatizacion', function () {
    return view('automatizacion');
});
Route::get('controlIncendio', function () {
    return view('controlIncendio');
});
Route::get('respaldoElectrico', function () {
    return view('respaldoElectrico');
});
Route::get('proteccionElectrica', function () {
    return view('proteccionElectrica');
});
Route::get('VoIP', function () {
    return view('VoIP');
});
Route::get('controlAsistencia', function () {
    return view('controlAsistencia');
});
Route::get('salasVideoConferencia', function () {
    return view('salasVideoConferencia');
});
Route::get('almacenamientoDatos', function () {
    return view('almacenamientoDatos');
});
Route::get('computo', function () {
    return view('computo');
});
Route::get('licenciamiento', function () {
    return view('licenciamiento');
});
Route::get('accesoriosRefacciones', function () {
    return view('accesoriosRefaccciones');
});
Route::get('servicioTecnico', function () {
    return view('servicioTecnico');
});

Route::get('365', function () {
    return view('microsoft365');
});

//******** Ruta para acceso HP
Route::get('/hp', function () {
    /*return view('main');*/
    return view('computohp');
});
//*******  Ruta de promociones
Route::get('/promociones', function () {
    return view('promociones');
});
//*******  Ruta de Presentación por correo (mailing)
Route::get('/mailing/presentacion', function () {
    return view('presentacion');
});

//  --> Métodos POST
Route::post('contacto','MessagesController@store');
