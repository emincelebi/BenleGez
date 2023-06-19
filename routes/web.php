<?php
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('/home', function(){
    return view('index');
});

Route::get('/contact', [ContactsController::class, 'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', [UserController::class, 'create'])->name('register');

Route::prefix('/admin')->group(function () {
    Route::get('/panel', function () {
        return view('admin.panel');
    });
    Route::get('/table', function () {
        return view('admin.table');
    });
    Route::get('/ui', function () {
        return view('admin.ui');
    });
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });
});

Route::post('contact', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('create-account', [UserController::class, 'store'])->name('users.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
