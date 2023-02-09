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
          Route::get('/crear', 'create')->name('reserva.create');
          Route::post('/preview', 'preview')->name('reserva.preview');
          Route::get('/mostrar/{spa_uID}', 'show')->name('reserva.show');
          Route::post('/crear', 'store')->name('reserva.store');
          Route::post('/editar', 'update')->name('reserva.update');
      });

      // Reservaciones
      Route::controller(ReservaEspacios\ReservacionesController::class)->prefix('reservaciones')->name('reservaciones.')->group(function () {
          Route::get('/', 'index')->name('reservaciones.index');
          Route::get('/mostrar', 'show')->name('reservaciones.show');
          Route::post('/mostrar/{res_uID}', 'view')->name('reservaciones.view');
      });

      // Espacios
      Route::controller(ReservaEspacios\SpacesController::class)->prefix('espacios')->name('espacios.')->group(function () {
          Route::get('/', 'index')->name('espacios.index');
          Route::get('/mostrar', 'show')->name('espacios.show');
          Route::get('/crear', 'create')->name('espacios.create');
          Route::post('/crear', 'store')->name('espacios.store');
          Route::post('/mostrar/{spa_uID}', 'view')->name('espacios.view');
          Route::post('/eliminar/{spa_uID}', 'delete')->name('espacios.delete');
          Route::post('/editar', 'edit')->name('espacios.edit');
      });

      // Inventario
      Route::controller(ReservaEspacios\InventoryController::class)->prefix('inventario')->name('inventario.')->group(function () {
          Route::get('/', 'index')->name('inventario.index');
          Route::get('/mostrar', 'show')->name('inventario.show');
          Route::get('/crear', 'create')->name('inventario.create');
          Route::post('/crear', 'store')->name('inventario.store');
          Route::post('/mostrar/{inv_uID}', 'view')->name('inventario.view');
          Route::post('/eliminar/{inv_uID}', 'delete')->name('inventario.delete');
          Route::post('/editar', 'edit')->name('inventario.edit');
      });
      // Calendario Mensual
      Route::controller(ReservaEspacios\MesController::class)->prefix('mensual')->name('mensual.')->group(function () {
          Route::get('/', 'show')->name('mensual.show');
          Route::get('/mensual/{start}', 'view')->name('mensual.view');
      });
      // Calendario Semanal
      Route::controller(ReservaEspacios\SemanalController::class)->prefix('semanal')->name('semanal.')->group(function () {
          Route::get('/', 'show')->name('semanal.show');
          Route::get('/semanal/{res_uID}', 'view')->name('semanal.view');
          Route::post('/eliminar/{res_uID}', 'delete')->name('semanal.delete');
          Route::get('/editar/{res_uID}', 'edit')->name('semanal.edit');
      });
      // Calendario Día
      Route::controller(ReservaEspacios\DiaController::class)->prefix('dia')->name('dia.')->group(function () {
          Route::get('/', 'show')->name('dia.show');
          Route::get('/dia/{res_uID}', 'view')->name('dia.view');
          Route::post('/eliminar/{res_uID}', 'delete')->name('dia.delete');
          Route::get('/editar/{res_uID}', 'edit')->name('dia.edit');
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
