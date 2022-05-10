<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('estudiantes', [EstudiantesController::class, 'index']);
Route::get('estudiantes/{id}', [EstudiantesController::class, 'show']);

Route::post('estudiantesEPN', [EstudiantesController::class, 'indexByEPN']);

Route::post('estudiantes', [EstudiantesController::class, 'store']);
Route::put('estudiantes/{id}', [EstudiantesController::class, 'update']);
Route::delete('estudiantes/{id}', [EstudiantesController::class, 'delete']);

//Profesores
Route::post('profesoresEPN', [ProfesorController::class, 'indexByEPN']);
