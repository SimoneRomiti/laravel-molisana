<?php

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

// Route della homepage con funzione per filtrare un array e passare alla view le variabili di cui ho bisogno sottoforma di array chiave => valore dove la chiave sarà la variabile da chiamare nel blade che fa riferimento alla variabile indicata come valore
Route::get('/', function () {
    $data = config('array');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $pasta) {
        $pasta['key'] = $key;
        if($pasta["tipo"] == "lunga"){
            $lunghe [] = $pasta;
        } elseif($pasta["tipo"] == "corta"){
            $corte [] = $pasta;
        } elseif($pasta["tipo"] == "cortissima"){
            $cortissime [] = $pasta;
        }
    }
    
    return view('home', [
        'lunghe' => $lunghe,
        'corte' => $corte,
        'cortissime' => $cortissime
        ]);
})->name('home');

// Route della pagina news
Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/product/{id}', function($id){
    $data = config('array');
    $prev = $id - 1;
    $next = $id + 1;
    return view('product', ['data' => $data, 'id' => $id, 'prev' => $prev, 'next' => $next]);
})->name('product');







