<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['guest'])->group(function(){
    Route::get('/register', function(){
        return view('auth.register');
    });
    Route::get('/login', function(){
        $email = session()->get('email');
        return view('auth.login', ['email' => $email]);
    })->name('login.view');

    Route::post('register', [SessionController::class, 'register'])->name('post.register');

    Route::post('login', [SessionController::class, 'login'])->name('post.login');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/home', function(){
        return view('main.home');
    })->name('home.view');
});
