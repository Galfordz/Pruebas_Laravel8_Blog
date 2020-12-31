@extends('layouts.plantilla')

@section('title','Curso Update')

@section('content')

    <h1>bienvenido desde esta pagina podras editar cursos desde blade</h1>

    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf 

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        
        <br><br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>

        <br><br>
        <label>
            Categoria:
            <br>
            <textarea name="categoria" rows="2">{{$curso->categoria}}</textarea>
        </label>
        <br><br>
        <button type="submit"> Actualizar Registro</button>
    </form>
@endsection
