<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'home'])->name('home');
Route::get('/project', [PortofolioController::class, 'project'])->name('project');
Route::get('/galeri', [PortofolioController::class, 'galeri'])->name('galeri');

