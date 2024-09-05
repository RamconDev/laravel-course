@extends('layouts.plantilla')

@section('title', 'Create Course')

@section('content')
    <h1>CREAR CURSO</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5"></textarea>
        </label>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="category">
        </label>
        <br>

        <button type="submit" value="">Enviar Formulario</button>
    </form>
@endsection