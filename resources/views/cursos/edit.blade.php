@extends('layouts.plantilla')

@section('title','Curso Update')

@section('content')

    <h1>bienvenido desde esta pagina podras editar cursos desde blade</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf 

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        
        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br><br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br><br>
        <label>
            Categoria:
            <br>
            <textarea name="categoria" rows="2">{{old('categoria',$curso->categoria)}}</textarea>
        </label>

        @error('categoria')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br><br>
        <button type="submit"> Actualizar Registro</button>
    </form>
@endsection
