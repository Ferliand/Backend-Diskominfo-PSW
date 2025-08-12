<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::resource('/', DashboardController::class);
Route::resource('/News', NewsController::class);
Route::get('/News/Detail/{id}', [NewsController::class, 'detail'])->name('News.detail');

Route::resource('/Pengumuman', PengumumanController::class);
Route::get('/Pengumuman/Detail/{id}', [PengumumanController::class, 'detail'])->name('Pengumuman.detail');
