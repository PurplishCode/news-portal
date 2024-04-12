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
    })->name('register.view');
    Route::get('/login', function(){
        $email = session()->get('email');
        return view('auth.login', ['email' => $email]);
    })->name('login');

    Route::post('register', [SessionController::class, 'register'])->name('post.register');

    Route::post('login', [SessionController::class, 'login'])->name('post.login');
});


Route::middleware(['auth'])->group(function(){

    Route::get('/admin/home', function(){
        return view('admin.home');
    })->name('home-admin.view');

    Route::get('logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/admin/data-berita', function(){
    return view('admin.data-berita');
})->name('data-berita.view');

Route::get('/admin/data-pengguna', function(){
    return view('admin.data-pengguna');
})->name('data-pengguna.view');

});

Route::get('/about-us', function(){
    return view('main.about-us');
})->name('about-us.view');

Route::get('/home', function(){
    return view('main.home');
})->name('home.view');

Route::get('/berita-terkini', function(){
    return view('main.berita-terkini');
})->name('berita-terkini.view');
