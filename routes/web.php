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


//上から順番に処理

// Route::get('', function () {
//     return view('index');
// });

Route::get('/','TodosController@index'); 
Route::resource('todos','TodosController');