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

    $busca = request('search');

    return view('menu', ['busca' => $busca]);
});

Route::get('/entrar', function(){
    return view('conta');
});

route::get('/noticias/{id}', function($id = 1){

    

    return view('noticia', ['id' => $id]);
});