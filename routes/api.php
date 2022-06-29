<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietarioController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/proprietarios-listar', [ProprietarioController::class, 'listar'])->name('proprietarios-listar');
Route::post('/proprietarios', [ProprietarioController::class, 'create'])->name('proprietarios-criar');

Route::get('/endereco-listar', [EnderecoController::class, 'listar'])->name('endereco-listar');
Route::post('/endereco', [EnderecoController::class, 'create'])->name('endereco-criar');

Route::get('/listar-tudo', [EnderecoController::class, 'listarTudo'])->name('listar-tudo');