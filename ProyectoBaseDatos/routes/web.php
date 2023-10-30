<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route:: resource('tasks', TaskController::class);


