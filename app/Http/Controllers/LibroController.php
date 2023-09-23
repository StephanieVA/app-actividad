<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    //
    public function index(Request $request)
    {

        $libros = Libro::allLibros();
      return view('libro.index')->with('libros',$libros);
    }

    public function store(Request $request)
    {
        $id_libro = Libro::create($request);

        return redirect()->back()->with('id_libro', $id_libro);
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->año_publicación = $request->input('año_publicación');
        $libro->género = $request->input('género');
        $libro->disponible = $request->input('disponible');
        $libro->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $libro = Libro::destroy($id);
        return redirect()->back();
    }

    public function showFormularioLibro()
    {
        $titulo = "Todos los libros";
        return view("libro", compact('titulo'));
    }
    public function createFormularioLibro(Request $request)
    {
        Libro::create2($request);
        $titulo = "Todos los libros";
        return view("libro", compact('titulo'));
    }
    public function showAllLibros(Request $request){
      $libro = Libro::allLibros();
      return view('libro.index')->with('libros',$libro);
    }
}
