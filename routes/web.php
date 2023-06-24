<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\YorumController;
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
})->name('index');

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
})->name('account');

Route::get('/addjourney', function () {
    if (auth()->check()) {
        return view('addjourney');
    } else {
        return view('errors/unauthorized');
    }
});

Route::get('/register', [UserController::class, 'create'])->name('register');

Route::prefix('/admin')->group(function () {
    Route::get('/panel', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.panel');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.panel');

    Route::get('/table', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.table');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.table');

    Route::get('/ui', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.ui');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.ui');

    Route::get('/add', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.add');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.add');

    Route::get('/edit-admin', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.edit-admin');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.edit-admin');

    Route::get('/delete-admin', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.delete-admin');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.delete-admin');

    Route::get('/ilanlar', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.ilanlar');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.ilanlar');

    Route::get('/delete-ilan', function () {
        if (Gate::allows('access-admin-panel')) {
            return view('admin.delete-ilan');
        } else {
            return view('errors/unauthorized');
        }
    })->name('admin.delete-ilan');
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('auth.login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('auth.register');
});

Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/contact', [ContactsController::class, 'getContactForm']);
Route::get('/profile/photo', [UserController::class, 'getProfilePhoto'])->name('get.profile.photo');
Route::get('/edit-account', [CarController::class, 'getCars'])->name('edit-account');

Route::get('/delete-account', [UserController::class, 'deleteAccount'])->name('delete-account');
Route::post('/update-account', function () {
    return redirect()->route('account')->with('success', 'Hesap bilgileri güncellendi');
})->name('update-account');

Route::get('/addjourney', [JourneyController::class, 'create'])->name('advert.create');
Route::post('/addjourney', [JourneyController::class, 'store'])->name('advert.store');
Route::get('/home', [CityController::class, 'create'])->name('index.create');
Route::post('/home', [CityController::class, 'store'])->name('index.store');
Route::post('contact', [ContactsController::class, 'store'])->name('contacts.store');
Route::post('register', [UserController::class, 'store'])->name('users.store');
Route::post('auth/login', [UserController::class, 'login'])->name('users.login');
Route::post('account', [UserController::class, 'updateAccount'])->name('update-account');
Route::post('admin/edit-admin', [AdminController::class, 'updateAccount'])->name('admin-update');
Route::post('/admin/add', [AdminController::class, 'store'])->name('store.admin');


Route::get('/index', [JourneyController::class, 'index'])->name('advert.index');
Route::post('/index', [JourneyController::class, 'store'])->name('advert.store');


Route::get('/index', [YorumController::class, 'index'])->name('yorum.index');
Route::post('/index', [YorumController::class, 'store'])->name('yorum.store');
Route::get('/index/{advertId}', [YorumController::class,'showComments']);
Route::delete('/adverts/{advert}', [JourneyController::class,'destroy'])->name('advert.destroy');
Route::post('/addjourney/{advertId}', [JourneyController::class,'delete_advert'])->name('advert.delete');
Route::post('admin/delete-admin', [AdminController::class,'deleteAdmin'])->name('delete-admin');
Route::post('admin/ilanlar', [AdminController::class,'deleteIlan'])->name('delete-ilan');





