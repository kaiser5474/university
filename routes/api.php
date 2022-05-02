<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

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

Route::get('estudiantes', 'EstudiantesController@index');
Route::get('estudiantes/{id}', 'EstudiantesController@show');

Route::post('estudiantesEPN', [EstudiantesController::class, 'indexByEPN']);

Route::post('estudiantes', 'EstudiantesController@store');
Route::put('estudiantes/{id}', 'EstudiantesController@update');
Route::delete('estudiantes/{id}', 'EstudiantesController@delete');
