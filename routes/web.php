<?php

use App\Http\Controllers\Web\ImportarArchivoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::resource('importar', ImportarArchivoController::class)->names('importar.archivo');

Route::get('importar/{id}', [App\Http\Controllers\Web\ImportarArchivoController::class,'index'])->name('importar.archivo');

Route::post('importar/archivo',[ImportarArchivoController::class,'importar'])->name('importar.archivo.importar');

Route::post('importar/procesar/archivo',[ImportarArchivoController::class,'procesarArchivo'])->name('importar.archivo.procesar');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\CarreraFacultadController::class, 'index'])->name('procesamiento');
Route::post('/procesamiento', [App\Http\Controllers\CarreraFacultadController::class, 'index'])->name('procesamiento');

Route::get('/livesearch', [App\Http\Controllers\CarreraFacultadController::class, 'getCarreras']);

Route::post('/datos', [App\Http\Controllers\CarreraFacultadController::class, 'mostrarDatosCarrera'])->name('datos');
Route::get('/datos', [App\Http\Controllers\CarreraFacultadController::class, 'mostrarDatosCarrera'])->name('datos');
Route::get('/resultados/{id}', [App\Http\Controllers\CarreraFacultadController::class, 'resultados'])->name('resultados');

Route::post('/procesamiento/pdf', [App\Http\Controllers\Web\ImportarArchivoController::class, 'pdf'])->name('pdf');

Route::get('/preguntas',[ImportarArchivoController::class,'preguntas'])->name('importar.preguntas');
