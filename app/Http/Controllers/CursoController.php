<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
        

    }

    public function create(){

        return view('cursos.create');

    }

    public function store(StoreCurso $request){
       // return $request->all(); //verifica lo que almaceno el formulario

       $curso = new Curso();

       $curso->name = $request->name;
       $curso->descripcion = $request->descripcion;
       $curso->categoria = $request->categoria;

       $curso->save(); //Guarda en la base de datos lo ingresado en el formulario.
       
       return redirect()->route('cursos.show', $curso->id);
    }
    

    public function show(Curso $curso){

    return view('cursos.show', ['curso' => $curso]);

    }

    public function edit(Curso $curso){
       // return $curso; //Retorna lo que esta almacenando en el ID del Curso.

       return view('cursos.edit', compact('curso')); //Retorna una vista con lo almacenado en el curso respecto a su ID.
    }

    public function update(Request $request, Curso $curso){
        //return $request->all(); //Verificar lo almacenado en metodo update


        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        
        return view('cursos.show', ['curso' => $curso]);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
