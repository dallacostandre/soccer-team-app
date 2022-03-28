<?php

use App\Http\Controllers\Confirmacao;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

// VIEW INICIAL
Route::GET('/', function () {
    return view('index');
});

// VIEW PARA CONFIRMAR PRESENÇA
Route::GET('confirmar-presenca', [MainController::class, 'confirmarPresenca'])->name('confirmar');

// VIEW PARA ENVIAR CHAVE DE ACESSO
Route::ANY('/buscar-jogo', [MainController::class, 'buscarJogo'])->name('buscarJogo');

// VIEW PARA CRIAR NOVO JOGO
Route::GET('/novo-jogo', [MainController::class, 'create'])->name('novoJogo');

// ROTRA PARA CRIAR NOVO JOGO
Route::POST('/adicionar-jogo', [MainController::class, 'store'])->name('adicionarJogo');

// VIEW PARA MOSTAR O JOGO SELECIONADO
Route::POST('confirmar-escalacao/', [MainController::class, 'confirmarEscalacao'])->name('confirmarEscalacao');

// VIEW PARA MOSTAR O JOGO SELECIONADO
Route::GET('statusJogo', [MainController::class, 'statusJogo'])->name('statusJogo');
