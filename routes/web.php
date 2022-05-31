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
});

Route::get('/about', function (){
    return view('about',
    ['data'=>[
        ['nama'=>'Muhammad Ilham Nor Ramadhani', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id'],
        ['nama'=>'Muhammad Hidayatullah', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id'],
        ['nama'=>'Hasan Adli', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id']]
    ]);
});