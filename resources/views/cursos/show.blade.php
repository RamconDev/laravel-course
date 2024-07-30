@extends('layouts.plantilla')

@section('title', 'Course - ' .  $curso)

@section('content')
    <h1>CURSO: {{$curso}}</h1>
@endsection