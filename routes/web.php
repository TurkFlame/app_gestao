<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

Route::get('/sobre-nos', [SobreNosController::class,'sobreNos']);
Route::get('/', [PrincipalController::class,'principal']);
Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/produto', 'ProdutoController@produto')->name('site.produto');
Route::get('/login', function(){return 'Login';})->name('site.login');

//Painel adm
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

//Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

// Route::fallback(function() {
//     echo 'A rota acessada não existe. <a href="'.route('index').'">clique aqui</a> para ir para página inicial';
// });