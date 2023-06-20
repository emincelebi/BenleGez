<?php
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/login-about', function () {
    return view('login-about');
});

Route::get('/login-contact', function () {
    return view('login-contact');
});

Route::get('/home', function () {
    if (Gate::allows('access-admin-panel')) {
        return redirect()->route('admin.panel');
    } else {
        return view('index');
    }
})->name('home');

Route::get('/contact', [ContactsController::class, 'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/account', function () {
    if (auth()->check()) {
        return view('account');
    } else {
        return view('errors/unauthorized');
    }
});

Route::get('/addjourney', function () {
    if (auth()->check()) {
        return view('addjourney');
    } else {
        return view('errors/unauthorized');
    }
});

Route::get('/home', function () {
    if (auth()->check()) {
        return view('index');
    } else {
        return view('errors/unauthorized');
    }
})->name('home');


Route::get('/register', [UserController::class, 'create'])->name('register');

Route::prefix('/admin')->group(function () {
    Route::get('/panel', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.panel');
        } else {
            return view('errors/unauthorized');
        }
    });
    Route::get('/table', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.table');
        } else {
            return view('errors/unauthorized');
        }
    });
    Route::get('/ui', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.ui');
        } else {
            return view('errors/unauthorized');
        }
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
Route::get('/contact', [ContactsController::class, 'getContactForm']);

Route::post('contact', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('register', [UserController::class, 'store'])->name('users.store');
Route::post('auth/login', [UserController::class, 'login'])->name('users.login');
Route::post('admin/panel')->name('admin.panel');
