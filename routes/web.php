<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get("/login", [LoginController::class, 'index']);
