<?php

use Illuminate\Support\Facades\Route;

//import controller mahasiswa
use App\Http\Controllers\MahasiswaController;
//import Controller Kalkulator
use App\Http\Controllers\KalkulatorController;
//import controller
use App\Http\Controllers\Web;
//import Controller Dashboard
use App\Http\Controllers\DashboardController;
//import controller EmployeController
use App\Http\Controllers\EmployeController;
//load controller Auth
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     //return view('welcome');
//     return "Haloo Nama ku adalah LARAVEL, salam kenal";
// });

//agar langsung masuk login
Route::get('/', function(){
    return view('login');
});

//route proses login (fungsi cek)
Route::post('/login',[AuthController::class, 'cek']);

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
Route::get('/biodata',function(){
    return view('biodata');
});

//route untuk membuka Controller web fungsi biodata
Route::get('/biodata',[Web::class, 'biodata']);

//route ke controller kalkulator
Route::get('/kalkulator',[KalkulatorController::class, 'home']);

//route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

//route ke controller mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route untuk menampilkan form luas segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

//route untuk memproses perhitungan luas segitiga
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitungSegitiga']);

//route group yang harus login dahulu
Route::group(['middleware' => 'islogin'], function(){
    //route ke controller Dashboard
    Route::get('/dashboard',[DashboardController::class, 'home']);
    Route::get('/gallery',[DashboardController::class, 'gallery']);

    //route CRUD employe
    Route::get('/employe',[EmployeController::class, 'index']);
    Route::get('/employe/create',[EmployeController::class, 'create']);
    Route::post('/employe/store',[EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);
    Route::put('/employe/{employe}',[EmployeController::class, 'update']);
    Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);

    //route logout
    Route::get('/logout',[AuthController::class, 'logout']);
});