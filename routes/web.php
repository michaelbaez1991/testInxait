<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('registro', [PersonaController::class, 'index'])->name('readRegister');
Route::post('registro', [PersonaController::class, 'store'])->name('creatRregister');

// Route::resource('registro', PersonaController::class)->only([
//     'index', 'store'
// ])->name('register');
Route::get('ciudad', [PersonaController::class, 'getCities']);
Route::get('listaRegistros', [PersonaController::class, 'exportExcel'])->name('exportExcel');

// Route::post('persona', [PersonaController::class, 'store']);