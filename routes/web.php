<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\FormularioController;

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

//Para cargar la pagina de crear usuario
Route::get('/crear-usuario', [App\Http\Controllers\CrearUsuarioController::class, 'index'])->name('crear-usuario');
Route::get('/nuevo-formulario', [App\Http\Controllers\CrearUsuarioController::class, 'nuevoFormulario'])->name('nuevo-formulario');

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
Route::delete('/estudiantes', [EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');
Auth::routes();

//Metodos de PROFESORES
Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores');
Route::post('/profesores', [ProfesorController::class, 'store'])->name('profesores.insert');
Route::patch('/profesores', [ProfesorController::class, 'edit'])->name('profesores-edit');
Route::delete('/profesores', [ProfesorController::class, 'destroy'])->name('profesores.destroy');

//Metodos de Formulario
Route::post('/formulario', [FormularioController::class, 'store'])->name('formulario.insert');
