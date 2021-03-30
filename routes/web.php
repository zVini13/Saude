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
})->name('inicio');

Route::get('/login', 'App\Http\Controllers\ControllerSaude@logar')->name('login');
Route::get('/cadastro', 'App\Http\Controllers\ControllerSaude@cadastrar')->name('cadastro');
Route::get('/recuperar-senha', 'App\Http\Controllers\ControllerSaude@recuperar')->name('recupera');








