<?php

use App\Events\PrivateEvent;
use App\Events\testingEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test' , function(){
    event(new PrivateEvent('Hello Ramin' , 2));
    return 'done';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
