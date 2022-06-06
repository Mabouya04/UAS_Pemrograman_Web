<?php

use App\Models\TipeSenjata;
use App\Models\Agent;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SenjataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TipeSenjataController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RoleController;
use GuzzleHttp\Middleware;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

//halaman map
Route::get('/map/{map:id}',[MapController::class, 'show']);
Route::get('/map', [MapController::class, 'index']);

//halaman senjata menurut tipe
Route::get('/tipes', [TipeSenjataController::class, 'index']);
Route::get('/tipes/{tipe:slug}', [TipeSenjataController::class, 'show']);

//halaman senjata
Route::get('/senjatas/{senjata:id}',[SenjataController::class,'show']);
Route::get('/senjatas',[SenjataController::class,'index']);

//crud senjata
Route::get('/create-senjata',[SenjataController::class,'create'])->middleware('auth');
Route::post('/create-senjata',[SenjataController::class,'store']);
Route::get('/edit-senjata/{senjata:id}', [SenjataController::class, 'edit'])->middleware('auth');
Route::put('/edit-senjata/{senjata:id}',[SenjataController::class,'update']);
Route::delete('/senjatas/{senjata:id}',[SenjataController::class,'destroy'])->middleware('auth');

//halaman login
Route::get('/login', [LoginController::class,'index'])->name('login') -> middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout'])-> middleware('auth');
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);



//Halaman Agent
Route::get('/agent', [AgentController::class, 'index']);

//Halaman Agent Detail
Route::get('/agent/{agentdetail:id}', [AgentController::class, 'show']);

//Halaman Role
Route::get('/roles', [RoleController::class, 'index']);

//Halaman Role Detail
Route::get('/roles/{role:slug}', [RoleController::class, 'show']);

//Halaman CRUD Agent
Route::get('/create-agent',[AgentController::class,'create'])->middleware('auth');
Route::post('/create-agent',[AgentController::class,'store']);
Route::get('/edit-agent/{agent:id}', [AgentController::class, 'edit'])->middleware('auth');
Route::put('/edit-agent/{agent:id}',[AgentController::class,'update']);
Route::delete('/agent/{agent:id}',[AgentController::class,'destroy'])->middleware('auth');