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
    return view('user.layout.masterlayout', ['title' => 'Master Layout']);
});

//============== ROUTE FOR USER ==============//

// dashboard
Route::get('/Dashboard', function () {
    return view('user.dashboard', ['title' => 'Dashboard']);
})->name('dashboard.index');

//todolist
Route::get('/Todolist', function () {
    return view('user.todolist', ['title' => 'Todolist']);
})->name('todolist.index');

//link
Route::get('/Link', function () {
    return view('user.link', ['title' => 'Link']);
})->name('link.index');

//kritik saran 
Route::get('/Kritik & Saran', function () {
    return view('user.kritik', ['title' => 'Kritik & Saran']);
})->name('kritik.index');

//bantuan
Route::get('/Bantuan', function () {
    return view('user.bantuan', ['title' => 'Bantuan']);
})->name('bantuan.index');

//============== ROUTE FOR USER END ==============//
