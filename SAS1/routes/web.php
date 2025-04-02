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


Route::get('/', 'HomeController@index')->name('/');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Lista de Cotejo
Route::get('/curso-silabo-revision', 'ListaCotejoController@cursos')->name('lista.cursos.revision');
Route::get('/lista-cotejo-revision/{id_asignacion}', 'ListaCotejoController@revision')->name('asignacion.revision.listacotejo');
Route::get('/lista-cotejo-obtencion/{id_asignacion}', 'ListaCotejoController@obtenerListaCotejo')->name('get.lista.cotejo');
Route::get('/lista-revision/{id_lista_cotejo}', 'ListaCotejoController@obtenerRevisionListaCotejo')->name('get.revision.cotejo');
Route::post('/store-evaluacion-lista', 'ListaCotejoController@storeEvaluacion')->name('store.lista.cotejo');
Route::get('/silabo-observado/{id_asignacion}', 'ListaCotejoController@observados')->name('detalle.observacion');

Route::get('/silabo-visado/{id_curso}', 'ListaCotejoController@silaboVisado')->name('silabo.visado');

//Curso
Route::get('/listado-cursos', 'CursosController@index')->name('lista.cursos');


Route::get('/curso-silabo-create', 'CursosController@create')->name('curso.create');
Route::get('/curso-silabo-edit/{id_curso}', 'CursosController@edit')->name('curso.edit');
Route::post('/curso-silabo-update', 'CursosController@update')->name('curso.update');




Route::post('/curso-silabo-store', 'CursosController@store')->name('curso.store');


Route::post('/silabo-corregido-store', 'CursosController@silaboCorregido')->name('silabo.corregido');

Route::get('/curso-silabo-delete/{id_curso}', 'CursosController@delete')->name('curso.delete');

Route::get('/subida-usuario-nuevo-interno-dpa-2022', 'SubidaUsuarioController@vistaUsuario');

Route::get('/correcion-silabo-visado-interno-dpa-2025', 'SubidaUsuarioController@vistaSilabo2025I');
Route::post('/subida-usuario-subida-dasdasd', 'SubidaUsuarioController@creacionUsuario')->name('store.usuario.interno');

Route::get('/correcion-silabo-visado-interno-dpa-2022', 'SubidaUsuarioController@vistaSilaboCorrecion');
Route::post('/corersd-asddas-ssdadasubida-dasdasd', 'SubidaUsuarioController@correccionSilabo')->name('correcion.silabo.interno');



Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
     ->name('password.reset');
