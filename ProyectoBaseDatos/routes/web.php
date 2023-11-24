<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\TaskController;
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

/* Ruta de verificacion de conexion de base de datos */
Route::get('/verificar-conexion', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        return "Error de conexión a la base de datos: " . $e->getMessage();
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/crearDuenio', [App\Http\Controllers\DuenioCasaController::class, 'create'])->name('crear');

Route::post('/registro', [App\Http\Controllers\DuenioCasaController::class, 'store'])->name('registrar');

Route::get('/editar/{id}', [App\Http\Controllers\DuenioCasaController::class, 'edit'])->name('vistaEditar');

Route::put('/actualizar/{id}', [App\Http\Controllers\DuenioCasaController::class, 'update'])->name('editar');

Route::delete('/eliminar/{id}', [App\Http\Controllers\DuenioCasaController::class, 'destroy'])->name('destruir');

Route::get('/crearRecibo', [App\Http\Controllers\ReciboController::class, 'create'])->name('crearRecibo');

Route::post('/registroRecibo', [App\Http\Controllers\ReciboController::class, 'store'])->name('registrarRecibo');

