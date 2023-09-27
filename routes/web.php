<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Beranda;
use App\Http\Controllers\Admin\Siswa;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\KelasController;
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

Route::get('/main', function () {
    return view('layout.main');
});
// LOGIN
Route::controller(LoginController::class)->group(function(){
    Route::get('/admin/login','index');
});
Route::controller(LoginController::class)->group(function(){
    Route::get('/jurnal/login','jurnal')->name('login');
    Route::post('/postlogin', 'postlogin')->name('postlogin');
    Route::get('/logout', 'logout')->name('logout');
});


Route::group(['middleware' => ['auth:user,guru']], function () {
    // Back End Admin
    Route::controller(Beranda::class)->group(function(){
        Route::get('/admin/beranda','index');
    });
    Route::controller(Siswa::class)->group(function(){
        Route::get('/admin/siswa','index');
    });
    // KELAS
    Route::resource('/admin/kelas', KelasController::class);
    //GURU
    //    Route::resource('/admin/guru', GuruController::class);
    Route::get('/admin/guru',[GuruController::class,'index']);
    Route::get('/admin/guru/create',[GuruController::class,'create'])->name('guru.create');
    Route::post('/admin/guru/store',[GuruController::class,'store']);
    Route::post('/admin/guru/edit',[GuruController::class,'edit']);
    Route::post('/admin/guru/update',[GuruController::class,'update']);
    // ISI JURNAL














});

