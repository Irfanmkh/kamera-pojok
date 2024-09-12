<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Livewire\RegMemberComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses');
Route::get('login/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('member', function(){
    return view('member.index');
})->name('member')->middleware('auth');

Route::get('reg-member', function(){
    return view('member.register');
})->name('reg-member')->middleware('auth');

Route::get('update-member', function(){
    return view('member.update');
})->name('update-member')->middleware('auth');

Route::post('reg-member', [RegMemberComponent::class, 'store'])->name('reg-member.store');