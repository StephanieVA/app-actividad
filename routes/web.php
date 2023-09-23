<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Models\Prestamo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libro',[App\Http\Controllers\LibroController::class, 'index'])->name('libro');
Route::resource('libro', LibroController::class);

Route::get('/prestamo',[App\Http\Controllers\PrestamoController::class, 'index'])->name('prestamo');
Route::resource('prestamo', PrestamoController::class);

Route::get('/addLibro',[LibroController::class, 'addLibro']);
Route::get('/upLibro',[LibroController::class, 'updateLibro']);

Route::get('/addPrestamo',[PrestamoController::class, 'showAddPrestamo']);
Route::post('/addOKPrestamo',[PrestamoController::class, 'addOKPrestamo'])->name('addOKPrestamo');

