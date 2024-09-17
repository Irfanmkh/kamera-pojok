<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Livewire\RegAlatComponent;
use App\Livewire\RegMemberComponent;
use Illuminate\Support\Facades\Route;


Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses');
Route::get('login/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::middleware(['auth'])->group(function () {
    //Harus Auth
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('member', function(){
        return view('member.index');
    })->name('member');

    Route::get('reg-member', function(){
        return view('member.register');
    })->name('reg-member');
    
    Route::get('update-member', function(){
        return view('member.update');
    })->name('update-member');
    
    Route::post('reg-member', [RegMemberComponent::class, 'store'])->name('reg-member.store');
    
    Route::get('alat', function(){
        return view('alat.index');
    })->name('alat');
    
    Route::get('reg-alat', function(){
        return view('alat.register');
    })->name('reg-alat');

    Route::post('reg-alat', [RegAlatComponent::class, 'store'])->name('reg-alat.store');
});


