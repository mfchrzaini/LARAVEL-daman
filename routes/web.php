<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\PermohonanController;

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

Route::get('/', function()
{
    return view('index');
});

Route::get('/403', function()
{
    return view('403');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/admin', [DashboardController::class, 'admin'])->middleware('auth')->middleware('admin');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->middleware('user');
Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::get('/status', [DashboardController::class, 'status'])->middleware('auth');
Route::get('/datadukung/kia', [DashboardController::class, 'datadukungkia'])->middleware('auth');
Route::get('/datadukung/kk', [DashboardController::class, 'datadukungkk'])->middleware('auth');
Route::get('/datadukung/aktaLahir', [DashboardController::class, 'datadukunglahir'])->middleware('auth');
Route::get('/datadukung/aktaKematian', [DashboardController::class, 'datadukungmati'])->middleware('auth');
Route::get('/detailstatus/{permohonan}', [DashboardController::class, 'detailstatus'])->middleware('auth');
Route::get('/downloadberkas/{berkas}', [DashboardController::class, 'downloadberkas'])->middleware('auth');
Route::get('/notifikasi', [DashboardController::class, 'notifikasi'])->middleware('auth');
Route::get('/bantuan', [DashboardController::class, 'bantuan'])->middleware('auth');
Route::post('/update/{user:nik}', [DashboardController::class, 'update']);
Route::delete('/delete/{user:nik}', [DashboardController::class, 'destroy']);

Route::get('/template', [TemplateController::class, 'index'])->middleware('auth');
Route::get('/uploadtemplate', [TemplateController::class, 'uploadtemplate'])->middleware('auth');
Route::post('/template', [TemplateController::class, 'store']);
Route::get('/download/{template}', [TemplateController::class, 'download'])->middleware('auth');
Route::get('/edit/template/{template}', [TemplateController::class, 'edit'])->middleware('auth');
Route::post('/update/template/{template}', [TemplateController::class, 'update']);
Route::delete('/destroy/{template}', [TemplateController::class, 'destroy']);

Route::get('/layanan', [PermohonanController::class, 'layanan'])->middleware('auth');
Route::get('/kia', [PermohonanController::class, 'kia'])->middleware('auth');
Route::post('/kia', [PermohonanController::class, 'store']);
Route::get('/kk', [PermohonanController::class, 'kk'])->middleware('auth');
Route::post('/kk', [PermohonanController::class, 'store']);
Route::get('/aktaLahir', [PermohonanController::class, 'aktaLahir'])->middleware('auth');
Route::post('/aktaLahir', [PermohonanController::class, 'store']);
Route::get('/aktaKematian', [PermohonanController::class, 'aktaKematian'])->middleware('auth');
Route::post('/aktaKematian', [PermohonanController::class, 'store']);
Route::get('/download/evd/{evidence}', [PermohonanController::class, 'download'])->middleware('auth')->middleware('admin');
Route::get('/daftarpermohonan', [PermohonanController::class, 'daftarpermohonan'])->middleware('auth')->middleware('admin');
Route::get('/detailpermohonan/{permohonan}', [PermohonanController::class, 'detailpermohonan'])->middleware('auth')->middleware('admin');
Route::post('/detailpermohonan', [PermohonanController::class, 'berkasSelesai'])->middleware('auth')->middleware('admin');

