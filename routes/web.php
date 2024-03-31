<?php

use App\Http\Controllers\Web\ImportarArchivoController;
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
Route::resource('importar', ImportarArchivoController::class)->names('importar.archivo');
Route::post('importar/archivo',[ImportarArchivoController::class,'importar'])->name('importar.archivo.importar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

