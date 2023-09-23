<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $prestamos = Prestamo::allPrestamo();
        $user = User::allUser();
        $libro = Libro::allLibros();


        return view('prestamo.index')->with(['user' => $user, 'libro' => $libro, 'prestamos' => $prestamos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disponible = 0;
        $id_prestamo = Prestamo::create($request, $disponible);
        return redirect()->back()->with('id_prestamo',$id_prestamo);
    }

    public function finallyPrestamo(Request $request, $id){
        $disponible = 1;
        $id_prestamo = Prestamo::finalizacion($request, $disponible);
        return redirect()->back()->with('id_prestamo',$id_prestamo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        // $prestamo = Prestamo::find($id);
        // $prestamo->book_id = $request->input('book_id');

        // $disponible = 1;
        // // $id_prestamo= Prestamo::finalizacion($request, $disponible);
        // // return redirect()->back()->with('id_prestamo',$id_prestamo);
        // //$prestamo = new Prestamo();
        // // $prestamo->book_id = $request->input('book_id');

        // $libro = Libro::find($prestamo->book_id = $request->input('book_id'));
        // $libro->disponible = $request->input('disponible');
        // $libro->disponible = $disponible;
        // $libro->update();
        // $prestamo->save();
        // // return $prestamo->id;
        // return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy( $id)
    {
        $disponible = 1;
        Prestamo::updateLibro($id,$disponible);
        $prestamo = Prestamo::find($id);
        $prestamo->delete();
        return redirect()->back();

    }

    public function showAddPrestamo(){
        $user = User::allUser();
        $libro = Libro::allLibros();
        $prestamos = Prestamo::allPrestamo();


        return view('prestamo.index')->with(['user' => $user, 'libro' => $libro, 'prestamos' => $prestamos]);
    }


    public function finalPrestamo(Request $request, $id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->book_id = $request->input('book_id');

        $libro = Libro::find($prestamo->book_id = $request->input('book_id'));
        $libro->disponible = $request->input('disponible');
        $libro->disponible = 1;
        $libro->update();
        $prestamo->update();
        return redirect()->back();
    }

}
