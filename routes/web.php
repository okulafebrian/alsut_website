<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/dashboard', 'dashboard');

Route::resource('tutors', TutorController::class);
Route::resource('members', MemberController::class);
Route::resource('learning-development', MemberController::class);