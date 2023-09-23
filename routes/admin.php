<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\PdfController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::get('pdf', [PdfController::class, 'index'])->name('admin.pdf');