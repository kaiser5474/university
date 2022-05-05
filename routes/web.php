<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

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

Route::get('/estudiantes-insert', function () {
    return view('estudiante.insert');
})->name('estudiantes-insert');

Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes');

Route::post('estudiantesEPN', [EstudiantesController::class, 'indexByEPN']);
Route::post('/estudiantes', [EstudiantesController::class, 'store'])->name('estudiantes');
Route::patch('/estudiantes', [EstudiantesController::class, 'edit'])->name('estudiantes-edit');
Route::delete('/estudiantes', [EstudiantesController::class, 'destroy'])->name('estudiantes-destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
