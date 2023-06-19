<?php
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home', function(){
    return view('index');
})->name('home');

Route::get('/contact', [ContactsController::class, 'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/addjourney', function () {
    return view('addjourney');
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

Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');


Route::post('contact', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('register', [UserController::class, 'store'])->name('users.store');
Route::post('auth/login', [UserController::class, 'login'])->name('users.login');
Route::post('admin/panel')->name('admin.panel');
