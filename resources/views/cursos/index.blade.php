@extends('layouts.plantilla')

@section('title','Curso Index')

@section('content')

    <h1>bienvenido desde la pagina Index en blade</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a></li>
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
