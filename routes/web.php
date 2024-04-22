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
    //return view('cableadoFibra');
    return view('cableadoFibra');
});
Route::get('seguridadInformatica', function () {
    //return view('seguridadInformatica');
    return view('main');
});
Route::get('redesInalambricas', function () {
    //return view('redesInalambricas');
    return view('main');
});
Route::get('videoVigilancia', function () {
    //return view('videoVigilancia');
    return view('main');
});
Route::get('controlAcceso', function () {
    //return view('controlAcceso');
    return view('main');
});
Route::get('automatizacion', function () {
    //return view('automatizacion');
    return view('main');
});
Route::get('controlIncendio', function () {
    //return view('controlIncendio');
    return view('main');
});
Route::get('respaldoElectrico', function () {
    //return view('respaldoElectrico');
    return view('main');
});
Route::get('proteccionElectrica', function () {
    //return view('proteccionElectrica');
    return view('main');
});
Route::get('VoIP', function () {
    //return view('VoIP');
    return view('main');
});
Route::get('controlAsistencia', function () {
    //return view('controlAsistencia');
    return view('main');
});
Route::get('salasVideoConferencia', function () {
    //return view('salasVideoConferencia');
    return view('main');
});
Route::get('almacenamientoDatos', function () {
    //return view('almacenamientoDatos');
    return view('main');
});
Route::get('computo', function () {
    return view('computo');
});
Route::get('licenciamiento', function () {
    //return view('licenciamiento');
    return view('main');
});
Route::get('accesoriosRefacciones', function () {
    //return view('accesoriosRefaccciones');
    return view('main');
});
Route::get('servicioTecnico', function () {
    //return view('servicioTecnico');
    return view('main');
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

Route::fallback(function() {
    return response()->view('errors.404', [], 404);
});
//  --> Métodos POST
Route::post('contacto','MessagesController@store');


