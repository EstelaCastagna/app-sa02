<?php

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
    return view('inicio');
})->name('inicio');

Route::get('teste', [\App\Http\Controllers\TesteController::class, 'index'])->name('teste');
Route::get('disciplinas', [\App\Http\Controllers\DisciplinasController::class, 'index'])->name('disciplinas');
Route::get('editar', [\App\Http\Controllers\DisciplinasController::class, 'edit'])->name('editar');
Route::put('atualizar/(id)', [\App\Http\Controllers\DisciplinasController::class, 'update'])->name('atualizar');
Route::put('incluir', [\App\Http\Controllers\DisciplinasController::class, 'store'])->name('incluir');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
