<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\secundariosController;
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

Route::get('/index', function () {
    return view('app');
})->name('index');

Route::get('/Registrar', [secundariosController::class,'index'])->name('filas');
Route::post('/Registrar',[secundariosController::class,'registro'])->name('secundarios');

Route::get('/Numeros', function () {
    return view('secundarios/Numeros');
    // Route::post('/secundarios',[secundariosController::class,'numerosIngreso'])->name('numeros')
})->name('Numeros');

Route::get('/Registrar/{id}',[secundariosController::class,'show'])->name('secundarios-edit');


Route::put('/Registrar/update',[secundariosController::class,'update'])->name('secundarios-update');
Route::delete('/Registrar{id}',[secundariosController::class,'destroy'])->name('secundarios-destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/',function(){
//     return view('app');
// })->name('home');

Route::get('/',function(){
    return view('auth/login');
})->name('login');

Route::get('/',function(){
    return view('auth/register');
})->name('register');