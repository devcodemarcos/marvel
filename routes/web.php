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

Route::get('/', 'SucursalController@obtener_sucursales');
Route::get('/sucursal/{sucursal}/comics', 'SucursalController@obtener_comics_sucursal');
Route::get('/comic/{comic}', 'ComicController@comic_by_id');


Route::get('/test', 'SucursalController@test');