<?php

//import Controller Kalkulator 
use App\Http\Controllers\KalkulatorController; 

use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\Web;

Route::get('/', function () {
    //return view('welcome');
    return "Haloo Nama ku adalah LARAVEL, salam kenal";
});

//route baru 
Route::get('/about', function () {
    //return view('welcome'); 
    return "<h2>Ini adalah laman About</h2>"; 
}); 

//route ke controller Web ke fungsi home 
Route::get('/web',[Web::class, 'home']); 

//route ke controller Web ke fungsi profil
Route::get('/profil/{nama}',[Web::class, 'profil']);

//route untuk membuka view biodata 
Route::get('/biodata',function(){ return view('biodata'); });

//route untuk membuka Controller web fungsi biodata 
Route::get('/biodata',[Web::class, 'biodata']);

//route ke controller kalkulator 
Route::get('/kalkulator',[KalkulatorController::class, 'home']); 

//route untuk proses perhitungan 
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);