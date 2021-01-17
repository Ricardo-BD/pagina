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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'show'])->name('cursos');

Route::get('/cursos/{id}/crear', [App\Http\Controllers\CursosController::class, 'create'])->name('cursos.create');

Route::post('/cursos/{id}/crear', [App\Http\Controllers\CursosController::class, 'store'])->name('cursos.store');	

