<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipioController;

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
//ruta para ver municipios
Route::get('/dashboard', [MunicipioController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//ruta eliminar
Route::post('/dashboard/{municipio}', [MunicipioController::class, 'destroy'])->middleware(['before', 'after'])->name('dashboard.eliminar');

//insertar municipio
Route::get('/formInsertar', [MunicipioController::class, 'create'])->middleware(['auth', 'verified'])->name('formInsertar');
Route::post('/formInsertar', [MunicipioController::class, 'store'])->middleware(['before', 'after'])->name('formInsertar.store');//no es necesario el nombre

//modificar municipio
Route::get('/formUpdate/{municipio}', [MunicipioController::class, 'edit'])->middleware(['auth', 'verified'])->name('formUpdate');
Route::post('/formUpdate', [MunicipioController::class, 'update'])->middleware(['auth', 'verified'])->name('formUpdate.update');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
