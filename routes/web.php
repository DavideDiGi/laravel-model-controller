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

Route::get('/', function () {
    return view('welcome');
});


// 7 - All'interno della funzione index() del controller, 
// recuperate tutti i film dal database e passateli alla view, 
// che quindi li visualizzerà a schermo, tramite delle card.