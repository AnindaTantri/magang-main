<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\DashboardDataPenugasan;
use App\Http\Controllers\DalamKotaController;
use App\Http\Controllers\DetailDalamKotaController;
use App\Http\Controllers\DinasHarianController;
use App\Http\Controllers\DetailDinasHarianController;
use App\Http\Controllers\LuarKotaController;
use App\Http\Controllers\DetailLuarKotaController;
use App\Http\Controllers\LuarNegeriController;
use App\Http\Controllers\DetailLuarNegeriController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PdfController;

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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);//store digunakan untuk menyimpan

Route::get('/dashboard', function(){
    return view('dashboard.index');
    })->middleware('auth');

Route::resource('/dashboard/data_penugasan', DashboardDataPenugasan::class)->middleware('auth');
Route::resource('/dashboard/dalam_kota', DalamKotaController::class)->middleware('auth');
Route::resource('/dashboard/detail_dalamkota', DetailDalamKotaController::class)->middleware('auth');
Route::resource('/dashboard/dinas_harian', DinasHarianController::class)->middleware('auth');
Route::resource('/dashboard/detail_dinasharian', DetailDinasHarianController::class)->middleware('auth');
Route::resource('/dashboard/luar_kota', LuarKotaController::class)->middleware('auth');
Route::resource('/dashboard/detail_luarkota', DetailLuarKotaController::class)->middleware('auth');
Route::resource('/dashboard/luar_negeri', LuarNegeriController::class)->middleware('auth');
Route::resource('/dashboard/detail_luarnegeri', DetailLuarNegeriController::class)->middleware('auth');
Route::resource('/dashboard/penilaian', PenilaianController::class)->middleware('auth');
Route::get('/download-pdf/{id}', [PdfController::class, 'downloadPDF']);

