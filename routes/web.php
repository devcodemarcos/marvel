<?php
use App\Sucursal;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SucursalController@obtener_sucursales')->name('inicio');
Route::get('/sucursal/{sucursal}/comics', 'SucursalController@obtener_comics_sucursal');
Route::get('/sucursal/registro', 'SucursalController@registro_form')->name('registro');
Route::post('/sucursal/registro', 'SucursalController@registro');
Route::get('/sucursal/{sucursal}/editar', 'SucursalController@editar_form')->name('edita_sucursal');
Route::post('/sucursal/editar', 'SucursalController@editar');
Route::post('/sucursal/{sucursal}/eliminar', 'SucursalController@eliminar');

Route::get('/comics', 'ComicController@obtener_comics');
Route::get('/comic/{comic}', 'ComicController@comic_by_id');