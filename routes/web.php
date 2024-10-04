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
    return view('template');
});

Route::view('/panel','panel.index')->name('panel');

Route::view('/categorias', 'categoria.index');
    
Route::resource('categorias',CategoriaController::class);

Route::get('/login', function () {
    return view('auth.login');
}); 