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
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        <br>
        @error('name')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5" >{{ old('description', $curso->description) }}</textarea>
        </label>
        <br>
        @error('description')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{ old('category', $curso->category) }}">
        </label>
        <br>
        @error('category')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <button type="submit" value="">Actualizar Formulario</button>
    </form>
@endsection