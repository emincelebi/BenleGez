<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [ContactsController::class, 'create']);

Route::get('/about', function (){
    return view('about');
});

Route::get('/login-1', function (){
    return view('login-1');
});

Route::get('/create-account', function (){
    return view('create-account');
});

Route::prefix('/admin')->group(function (){
    Route::get('/panel',function (){
        return view('admin/panel');
    });
    Route::get('/table', function (){
        return view('admin/table');
    });
    Route::get('/ui', function (){
        return view('admin/ui');
    });
});

Route::post('contact',[ContactsController::class, 'store'])->name('contacts.store');
