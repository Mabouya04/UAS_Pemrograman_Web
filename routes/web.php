<?php

use App\Models\TipeSenjata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SenjataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeSenjataController;

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
    return view('welcome',[
        'title' => 'Home'
    ]);
});
Route::get('/senjatas',[SenjataController::class,'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/tipes', [TipeSenjataController::class, 'index']);

Route::get('/tipes/{tipe:slug}', function (TipeSenjata $tipe) {
    return view('tipe', [
        'title' => $tipe->name,
        'tipes' => $tipe->Senjata,
        'tipe' => $tipe->name
    ]);
});

//halaman detail
Route::get('/senjatas/{senjata:id}',[SenjataController::class,'show']);

//halaman login
Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/agents', function () {
    return view ('agents' , [
        "title" => "Agents",
        "name" => "Brimstone",
        "image" => "Brimstone.jpg"
    ]);
});