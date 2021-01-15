<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::middleware('role:superadmin')->get('/superadmin', function () {
    return view('superadmin.index');
})->name('superadmin');

Route::middleware('role:admin')->get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::middleware('role:spv_man_admin')->get('/spv', function () {
    return view('spv_man_admin.index');
})->name('spv');

Route::middleware('role:head')->get('/head', function () {
    return view('head.index');
})->name('head');

Route::middleware('role:employee')->get('/employee', function () {
    return view('employee.index');
})->name('employee');

Route::middleware('role:security')->get('/security', function () {
    return view('security.index');
})->name('security');
