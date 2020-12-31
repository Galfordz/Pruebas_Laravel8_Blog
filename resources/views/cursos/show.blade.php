@extends('layouts.plantilla')

@section('title','Cursos' . $curso->name)

@section('content')

    <h1>bienvenido desde la pagina Para mostrar los cursos desde blade: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">volver a cursos</a>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoria: {{$curso->categoria}} </strong></p>
    <p><strong>Descripcion: {{$curso->descripcion}} </strong></p>
@endsection
