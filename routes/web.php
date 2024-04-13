<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadocontroller;
use App\Http\Controllers\afiliadocontroller;
use App\Http\Controllers\retirocontroller;
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

Route::get('/afiliado', function () {
    return view('afiliado.index');
});



Route::resource('/empleado','App\Http\controllers\empleadocontroller');
Route::resource('/afiliado','App\Http\controllers\afiliadocontroller');
Route::resource('/retiro','App\Http\controllers\retirocontroller');

route::get('/retiro/{id}/{id2}',[retirocontroller::class,'show']);

route::get('/retiro/create/{id}/{id2}',[retirocontroller::class,'create']);

route::resource('/deposito','App\Http\controllers\depositocontroller');

route::get('/deposito/{id}/{id2}',[depositocontroller::class,'show']);

route::get('/retiro/create/{id}/{id2}',[depositocontroller::class,'create']);






Route::get('/deposito', function () {
    return view('deposito.index');
});



Route::get('/retiros', function () {
    return view('retiros.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
