<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

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
