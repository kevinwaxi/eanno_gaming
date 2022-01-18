<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('register/request', [RegisterController::class, 'requestInvitation'])->name('requestInvitation');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('HasInvitation');

Route::post('invitations', [InvitationController::class, 'store'])->middleware('guest')->name('storeInvitation');

Route::any('/{any?}', [HomeController::class, 'index'])->where('any', '[\/\w\.-]*')->name('home');
