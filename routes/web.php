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

Route::redirect('/', 'login');
Route::get('administrativos', 'App\Http\Controllers\Import\ImportController@index');
Route::post('administrativos/import', 'App\Http\Controllers\Import\ImportController@import');


Route::group(['middleware' => ['web', 'guest'], 'namespace' => 'App\Http\Controllers\Auth'], function () {
  Route::get('login', 'AuthController@login')->name('login');
  Route::get('connect', 'AuthController@connect')->name('connect');
});

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'namespace' => 'App\Http\Controllers'], function () {

  Route::get('/', 'PagesController@app')->name('app');
  Route::get('/inicio', 'General\DashboardController@init')->name('main-dashboard');
  Route::get('logout', 'Auth\AuthController@logout')->name('logout');

  Route::prefix('administrador')->group(function () {

    // Menu
    Route::controller(General\MenuController::class)->prefix('menu')->group(function () {
      Route::get('/', 'index')->name('admin.menu.index');
      Route::get('/crear', 'create')->name('admin.menu.create');
      Route::post('/crear', 'store')->name('admin.menu.store');
      Route::get('/mostrar/{id}', 'show')->name('admin.menu.show');
    });

    // Submenu
    Route::controller(General\SubmenuController::class)->prefix('submenu')->group(function () {
      Route::get('/', 'index')->name('admin.submenu.index');
      Route::get('/crear', 'create')->name('admin.submenu.create');
      Route::post('/crear', 'store')->name('admin.submenu.store');
      Route::get('/mostrar/{id}', 'show')->name('admin.submenu.show');
    });
    
  });
  // Reserva Espacios
  Route::prefix('reserva-espacios')->group(function () {
    // Reservas
    Route::controller(ReservaEspacios\ReservaController::class)->prefix('reserva')->name('reserva-espacios.')->group(function () {
      Route::get('/', 'index')->name('reserva.index');
      Route::get('/mostrar', 'show')->name('reserva.show');
      Route::get('/mostrar/{start}', 'view')->name('reserva.view');
      Route::post('/preview', 'preview')->name('reserva.preview');
    });
  });

  // Evaluación becarios
  Route::prefix('evaluacion-becarios')->group(function () {
    // Rutas convocatorias
    Route::controller(scholarshipEvaluation\administrator\ConvocatoriaController::class)->prefix('convocatoria')->name('convocatoria-becarios.')->group(function () {
      Route::get('/', 'index')->name('convocatoria.index');
      Route::get('/crear', 'create')->name('convocatoria.create');
      Route::post('/crear', 'store')->name('convocatoria.store');
      Route::delete('/delete/{id}', 'destroy')->name('convocatoria.destroy');
    });

    // Rutas Coordinador/Evaluador
    Route::controller(scholarshipEvaluation\administrator\CoordinadorEvaluadorController::class)->prefix('coordinador-evaluador')->name('coordinador-evaluador.')->group(function () {
      Route::get('/', 'index')->name('coordinador-evaluador.index');
      Route::get('/crear', 'create')->name('coordinador-evaluador.create');
      Route::get('/import', 'import')->name('coordinador-evaluador.import');
    });

    //Rutas Becarios
    Route::controller(scholarshipEvaluation\administrator\BecariosController::class)->prefix('becarios')->name('becarios.')->group(function () {
      Route::get('/', 'index')->name('becarios.index');
      Route::get('/crear', 'create')->name('becarios.create');
      Route::get('/import', 'import')->name('becarios.import');
      
    });
    

  });
  

  //ODT Cominucación
});
