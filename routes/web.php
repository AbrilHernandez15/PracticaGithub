<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorBD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view("Plantilla");
});

// Ruta de consulta
Route::get('insecto/index', [ControladorBD::class, 'index'])->name('insecto.index');

// Ruta para cargar el formulario de crear
Route::get('insecto/create', [ControladorBD::class, 'create'])->name('insecto.create');

// Ruta para guardar datos
Route::post('insecto/store', [ControladorBD::class, 'store'])->name('insecto.store');

// Ruta para formulario editar
Route::get('insecto/edit/{id}', [ControladorBD::class, 'edit'])->name('insecto.edit');

// Ruta para editar datos
Route::put('insecto/update/{id}', [ControladorBD::class, 'update'])->name('insecto.update');

