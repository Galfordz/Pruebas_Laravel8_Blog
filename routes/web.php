<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

/*Route::get('cursos' ,[CursoController::class , 'index'])->name('cursos.index');

//Ruta para crear un formulario de creacion de cursos
Route::get('cursos/create', [CursoController::class , 'create'])->name('cursos.create');

//Ruta que se encarga de procesar la informacion desde el formulario de crearcion de cursos.
Route::post('cursos', [CursoController::class , 'store'])->name('cursos.store');
    
Route::get('cursos/{curso}', [CursoController::class , 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class , 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class , 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class , 'destroy'])->name('cursos.destroy');
*/

//se definen las rutas automaticamente haciendo uso de las convenciones del controlador.
Route::resource('cursos', CursoController::class);
