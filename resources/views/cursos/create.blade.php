@extends('layouts.plantilla')

@section('title','Curso create')

@section('content')

    <h1>bienvenido desde la pagina Para crear cursos desde blade</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf 

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
            <textarea name="categoria" rows="2">{{old('categoria')}}</textarea>
        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br><br>
        <button type="submit"> Enviar Informacion</button>
    </form>
@endsection
