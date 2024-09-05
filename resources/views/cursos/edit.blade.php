@extends('layouts.plantilla')

@section('title', 'Edit Course')

@section('content')
    <h1>EDITAR CURSO</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>

        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5" >{{ $curso->description }}</textarea>
        </label>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{ $curso->category }}">
        </label>
        <br>

        <button type="submit" value="">Actualizar Formulario</button>
    </form>
@endsection