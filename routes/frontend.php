<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BrandaController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\GaleryController;
use App\Http\Controllers\Frontend\ProfilController;
use App\Http\Controllers\Frontend\EkstrakulikulerController;

/*
|--------------------------------------------------------------------------
| List Routes
|--------------------------------------------------------------------------
*/
Route::get('/branda',[BrandaController::class,'index']);
Route::get('/kontak',[KontakController::class,'index']);
Route::get('/ekstrakulikuler',[EkstrakulikulerController::class,'index']);
Route::get('/profil',[ProfilController::class,'index']);
Route::get('/galery',[GaleryController::class,'index']);

?>