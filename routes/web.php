<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Registerv;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Logout;
use App\Livewire\Listar;
use App\Livewire\Listarv;
use App\Livewire\Editar;


Route::get('/', function () {
    return redirect()->to('/login');
});

Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', Logout::class)->name('logout');
    Route::get('/listar', Listar::class)->name('listar');
    Route::get('/registerv', Registerv::class)->name('registerv');
    Route::get('/listarv', Listarv::class)->name('listarv');
    Route::get('/editar', Editar::class)->name('editar');
});