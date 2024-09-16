@extends('layouts.plantilla')

@section('title', 'Create Course')

@section('content')
    <h1>CREAR CURSO</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        @error('category')
        <br>
            <span>*{{ $message }}</span>
        <br>
        @enderror
        <br>

        <button type="submit" value="">Enviar Formulario</button>
    </form>
@endsection