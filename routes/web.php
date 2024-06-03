<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\inventarisController;
use App\Http\Controllers\userController;



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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

// petugas
Route::get('/Petugas', [PetugasController::class,'index']);
Route::get('/createP', [PetugasController::class,'create']);
Route::post('/storeP', [PetugasController::class,'store']);
Route::get('/editP{id}', [PetugasController::class,'edit']);
Route::post('/updateP', [PetugasController::class,'update']);
Route::get('/petugas/hapus{id}', [PetugasController::class,'destroy']);

// jenis
Route::get('/Jenis', [JenisController::class,'index']);
Route::get('/createj', [JenisController::class,'create']);
Route::post('/storej', [JenisController::class,'store']);
Route::get('/editj{id}', [JenisController::class,'edit']);
Route::post('/updatej', [JenisController::class,'update']);
Route::get('/hapusj{id}', [JenisController::class,'destroy']);

// ruang
Route::get('/Ruang', [RuangController::class,'index']);
Route::get('/creater', [RuangController::class,'create']);
Route::post('/storer', [RuangController::class,'store']);
Route::get('/editr{id}', [RuangController::class,'edit']);
Route::post('/updater', [RuangController::class,'update']);
Route::get('/hapusr{id}', [RuangController::class,'destroy']);

// pegawai
Route::get('/Pegawai', [PegawaiController::class,'index']);
Route::get('/create', [PegawaiController::class,'create']);
Route::post('/store', [PegawaiController::class,'store']);
Route::get('/edit{id}', [PegawaiController::class,'edit']);
Route::post('/update', [PegawaiController::class,'update']);
Route::get('/hapus{id}', [PegawaiController::class,'destroy']);

Route::get('/inventaris', [inventarisController::class,'index']);
Route::get('createI',[inventarisController::class,'create']);
Route::post('/storeI', [inventarisController::class,'store']);
Route::get('/editI{id}', [inventarisController::class,'edit']);
Route::post('/updateI', [inventarisController::class,'update']);
Route::get('/hapusI{id}', [inventarisController::class,'destroy']);

