<?php

use App\Models\TipeSenjata;
use App\Models\Agent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SenjataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeSenjataController;
use App\Http\Controllers\AgentController;

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

//createn senjata
Route::get('/create-senjata',[SenjataController::class,'create']);
Route::post('/create-senjata',[SenjataController::class,'store']);
Route::get('/edit-senjata/{senjata:id}', [SenjataController::class, 'edit']);
Route::put('/edit-senjata/{senjata:id}',[SenjataController::class,'update']);
Route::delete('/senjatas/{senjata:id}',[SenjataController::class,'destroy']);

//halaman login
Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);



//Halaman Agent
Route::get('/agent', [AgentController::class, 'index']);

//Halaman Agent Detail
Route::get('agent/{agentdetail:slug}', [AgentController::class, 'show']);