@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>CURSOS</h1>

    <a href="{{ route('cursos.create') }}">Create Course</a>

    <ul>
        @foreach ( $cursos as $curso )
            
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
            </li>

        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection