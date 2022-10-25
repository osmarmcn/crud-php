<?php

use App\Models\Produto;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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

Route::get('/', function () {
    return view('inicio');
});

//rota para criar o produto
Route::post('/cadastrar-produtos',function(HttpRequest $request){
    // dd é uma função laravel, serve para mostrar na tela e parar aplicação
    //dd($request->all());


    Produto:: create([
        'nome'=> $request->nome,
        'valor'=> $request->valor,
        'estoque'=>$request->estoque
    ]);

    echo 'Produto criado com sucesso!!';
});

//rota para ler o produto
Route::get('/ver-produto/{id}',function($id){
   
 // dd(Produto::find($id)) ;
    $produto = Produto::find($id);
    return view('ver',['produto' => $produto]);

});

