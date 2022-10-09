<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){

Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
   /* Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);*/
    Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
    Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
    Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
    Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
    Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
});
    

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('servicios', [ServiciosController::class, 'index'])->name('servicioIndex');
Route::post('servicios', [ServiciosController::class, 'guardar'])->name('servicioGuardar');
Route::put('servicios/{servicio}', [ServiciosController::class, 'actualizar'])->name('servicioActualizar');
Route::delete('servicios/{servicio}', [ServiciosController::class, 'eliminar'])->name('servicioEliminar');