<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenjataController;

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

//halaman detail
Route::get('/senjatas/{senjata:id}',[SenjataController::class,'show']);

Route::get('/agents', function () {
    return view ('agents' , [
        "title" => "Agents",
        "name" => "Brimstone",
        "image" => "Brimstone.jpg"
    ]);
});