<?php

//load controller
use App\Http\Controllers\AuthController;

//import controller EmployeController
use App\Http\Controllers\EmployeController;

//import Controller Dashboard
use App\Http\Controllers\DashboardController;

//import controller mahasiswa
use App\Http\Controllers\MahasiswaController;

//import Controller Kalkulator 
use App\Http\Controllers\KalkulatorController; 

use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\Web;

//Route::get('/', function () {
    //return view('welcome');
    //return "Haloo Nama ku adalah LARAVEL, salam kenal";
//});

//agar langsung masuk login
Route::get('/', function(){
    return view('login');
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

//route ke controller mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route untuk menampilkan form luas segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

//route untuk memproses perhitungan luas segitiga
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitungSegitiga']);

//route ke controller Dashboard
Route::get('/dashboard', [DashboardController::class, 'home']);

//route ke controller Dashboard untuk menampilkan gallery
Route::get('/gallery', [DashboardController::class, 'gallery']);

//route ke controller employe
Route::get('/employe',[EmployeController::class, 'index']);

//menampilkan form tambah data pegawai
Route::get('/employe/create',[EmployeController::class, 'create']);

//route untuk menyimpan data pegawai ke database
Route::post('/employe/store',[EmployeController::class, 'store']);

//route untuk menampilkan form edit data pegawai
Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);

//route untuk menyimpan perubahan data pegawai ke database
Route::put('/employe/{employe}',[EmployeController::class, 'update']);

//route untuk menghapus data pegawai dari database
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);

//route untuk menampilkan form login
Route::post('/login',[AuthController::class, 'cek']);

//route untuk logout
Route::get('/logout',[AuthController::class, 'logout']);