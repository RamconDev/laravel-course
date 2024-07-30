<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', function () {
    return "Cursos";
});

Route::get('cursos/create', function () {
    return "Crear Curso";
});

// Route::get('cursos/{curso}', function($curso) {
//     return "Curso: $curso";
// });

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {

    if ( $categoria ) {
        return "Curso: $curso<br/> Categoria: $categoria";
    } else {
        return "Curso: $curso";
    }

});
