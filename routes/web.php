<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register/request', [RegisterController::class, 'requestInvitation'])->name('requestInvitation');

Route::post('invitations', [InvitationController::class, 'store'])->middleware('guest')->name('storeInvitation');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('HasInvitation');

Auth::routes();

Route::any('/{any?}', [HomeController::class, 'index'])->where('any', '[\/\w\.-]*')->name('home');
