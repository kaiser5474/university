<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesorController;

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

//Para LOGIN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');


Route::get('/', function () {
    return view('welcome');
});

//Para consultar API de Estudiantes
Route::post('/estudiantesEPN', [EstudiantesController::class, 'indexByEPN'])->name('estudiantesEPN');

//Para consultar API de Profesores
Route::post('/profesoresEPN', [ProfesorController::class, 'indexByEPN'])->name('profesoresEPN');

//Metodos de ESTUDIANTES
Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes');
Route::post('/estudiantes', [EstudiantesController::class, 'store'])->name('estudiantes.insert');
Route::patch('/estudiantes', [EstudiantesController::class, 'edit'])->name('estudiantes-edit');
Route::delete('/estudiantes', [EstudiantesController::class, 'destroy'])->name('estudiantes-destroy');
Auth::routes();

//Metodos de PROFESORES