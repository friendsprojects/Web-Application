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

Route::group(['middleware' => ['web']], function () {
    Route::get('/signin', function () {
        return view('signin');
    })->name('signin');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add-book', function () {
        return view('addBook');
    })->name('addBook');

    Route::get('/view-book', function () {
        return view('viewBook');
    })->name('viewBook');

    Route::get('/edit-book', function () {
        return view('editBook');
    })->name('editBook');

    
});

Route::get('firebase', 'FirebaseController@index');