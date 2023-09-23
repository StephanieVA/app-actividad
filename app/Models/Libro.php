<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo','autor', 'año_publicación', 'género','disponible'];
    protected $guarded = [];
    public $timestamp = false;

    public static function create(Request $request){
        $libro = new Libro();
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->año_publicación = $request->input('año_publicación');
        $libro->género = $request->input('género');
        $libro->disponible = $request->input('disponible');
        $libro->save();

        return $libro->id;
    }

    public static function allLibros(){
        return Libro::all();
    }

    public static function destroy($ids){
        $libro = Libro::find($ids);
        $libro->delete();
    }

    public function prestamo(){
        $prestamo = Prestamo::find($this->book_id);
        return $this->belongsTo('App\Models\Prestamo');
    }
}
