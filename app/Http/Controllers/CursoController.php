<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        // return "Cursos";
        return view('cursos.index');
    }

    public function create(){
        // return "Crear Curso";
        return view('cursos.create');
    }

    public function show( $curso ){
        // return "Curso: $curso";
        // ( CREAR ARRAY ) compact('curso') = ['curso' => $curso] 
        return view('cursos.show', compact('curso'));
    }
}
