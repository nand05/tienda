<?php

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
Route::get('perfil','ControladorGET@ShowPerfil')->middleware('auth')->name('perfil');

Route::get('plantilla','ControladorGET@ShowPlantilla')->name('plantilla');

Route::get('registro','ControladorGET@ShowRegistro')->name('registro');

Route::get('login','ControladorGET@ShowLogin')->name('login');
Route::post('registro','ControladorPOST@RegistrarUsuario')->name('regUser');


//Route::post('Login','ControladorPOST@autenticacion')->name('autenticacion');

//Route::post('Logout','ControladorPOST@logout')->name('cerrarSesion');


