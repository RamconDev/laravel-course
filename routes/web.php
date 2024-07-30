<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', 'HomeController');  // < v8 laravel
// Route::get('/', 'CursoController@index');  // < v8 laravel

Route::get('/', HomeController::class);


/**
 * Controlador para Cursos
 */

// Route::get('cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}', [CursoController::class, 'show']);

//GRUPO DE RUTAS // > v9 laravel
Route::controller(CursoController::class)->group( function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});