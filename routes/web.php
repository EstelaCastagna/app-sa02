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
Route::get('editar/{id}/atualizar_disciplina', [\App\Http\Controllers\DisciplinasController::class, 'edit'])->name('editar');
Route::put('/disciplina', [\App\Http\Controllers\DisciplinasController::class, 'update'])->name('atualizar');
Route::get('/disciplina/novo', [\App\Http\Controllers\DisciplinasController::class, 'create'])->name('novo');
Route::put('/disciplina/incluir', [\App\Http\Controllers\DisciplinasController::class, 'store'])->name('incluir');
Route::get('/disciplina/{id}/excluir', [\App\Http\Controllers\DisciplinasController::class, 'destroy'])->name('excluir');

Route::get('usuarios', [\App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
Route::get('editar/{id}/atualizar_usuario', [\App\Http\Controllers\UsuariosController::class, 'edit'])->name('editarUser');
Route::put('/usuario', [\App\Http\Controllers\UsuariosController::class, 'update'])->name('atualizarUser');
Route::get('/usuario/novo', [\App\Http\Controllers\UsuariosController::class, 'create'])->name('novoUser');
Route::put('/usuario/incluir', [\App\Http\Controllers\UsuariosController::class, 'store'])->name('incluirUser');
Route::get('/usuario/{id}/excluir', [\App\Http\Controllers\UsuariosController::class, 'destroy'])->name('excluirUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
