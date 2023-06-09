<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos','App\Http\Controllers\ProductoController')->names('productos');
Route::resource('categorias','App\Http\Controllers\CategoriaController')->names('categorias');
Route::resource('subcategoria','App\Http\Controllers\subcategoriaController')->names('subcategorias');

