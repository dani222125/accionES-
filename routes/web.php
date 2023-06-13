<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\InicioController;
use App\Http\Controller\UsuarioController;
use App\Http\Controllers\DepartamentoController;
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

Route::get('/home', function (){
    return view('inicio');
});


//Ruta para mostrar la vista show.blade.php
Route::get('/products/show', [UsuarioController::class, 'index']);

//Ruta para mostrar la vista create.blade.php
Route::get('/products/create', [UsuarioController::class, 'create']);


// Ruta para mostrar la vista update.blade.php
Route::get('/products/edit/{usuario}', [UsuarioController::class, 'edit']);

// Ruta para insertar usuario
Route::post('/products/store', [UsuarioController::class, 'store']);

// Ruta para modificar usuario
Route::put('/products/update/{usuario}', [UsuarioController::class, 'update']);

// Ruta para eliminar usuario
Route::delete('/products/destroy/{id}', [UsuarioController::class, 'destroy']);

Auth::routes();

//Departamentos y Municipios
Route::resource('departamentos', DepartamentoController::class);
Route::resource('municipios', MunicipioController::class);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
