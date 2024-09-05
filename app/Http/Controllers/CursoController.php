<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        // return "Cursos";
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        // return "Crear Curso";
        return view('cursos.create');
    }

    public function store(Request $request) {
        
        $curso = new Curso();
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show( Curso $curso ){
        // return "Curso: $curso";
        // ( CREAR ARRAY ) compact('curso') = ['curso' => $curso] 

        // $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function edit( Curso $curso ) {
        return view('cursos.edit', compact('curso'));
    }

    public function update( Request $request, Curso $curso ) {
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
