<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Libro;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'book_id', 'fecha_prestamo', 'fecha_devolucion', 'devolucion'];
    protected $guarded = [];
    public $timestamp = false;

    public static function allPrestamo()
    {

        return Prestamo::all();
    }

    public static function create(Request $request, $disponible)
    {
        $prestamo = new Prestamo();
        $prestamo->user_id = $request->input('user_id');
        $prestamo->book_id = $request->input('book_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->devolucion = $request->input('devolucion');
        // $libro = new Libro();
        $libro = Libro::find($prestamo->book_id = $request->input('book_id'));
        $libro->disponible = $request->input('disponible');
        $libro->disponible = $disponible;
        $libro->update();
        $prestamo->save();

        return $prestamo->id;
    }
    public static function finalizacion(Request $request, $disponible){
        $prestamo = new Prestamo();
        $prestamo->book_id = $request->input('book_id');

        $libro = Libro::find($prestamo->book_id = $request->input('book_id'));
        $libro->disponible = $request->input('disponible');
        $libro->disponible = $disponible;
        $libro->update();
        $prestamo->save();
        return $prestamo->id;

    }

    public static function updateLibro(Request $request, $disponible)
    {
        $prestamo = new Prestamo();
        $libro = Libro::find($prestamo->book_id = $request->input('book_id'));
        $libro->disponible = $request->input('disponible');
        $libro->disponible = $disponible;
        $libro->update();
    }
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'book_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}
