<?php

use App\Models\CarreraFacultad;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/procesamiento', [App\Http\Controllers\CarreraFacultadController::class, 'index'])->name('procesamiento');
Route::post('/procesamiento', [App\Http\Controllers\CarreraFacultadController::class, 'index'])->name('procesamiento');

Route::get('/livesearch', [App\Http\Controllers\CarreraFacultadController::class, 'getCarreras']);

Route::post('/datos', [App\Http\Controllers\CarreraFacultadController::class, 'mostrarDatosCarrera'])->name('datos');
Route::get('/datos', [App\Http\Controllers\CarreraFacultadController::class, 'mostrarDatosCarrera'])->name('datos');
Route::get('/resultados/{id}', [App\Http\Controllers\CarreraFacultadController::class, 'resultados'])->name('resultados');
