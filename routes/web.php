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
    return view('welcome');
});
Route::post('/registration',[App\Http\Controllers\AuthenticateController::class, 'register_field_executive']);

Auth::routes();
// After login home view depending on role
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'admin_dashboard'])->name('dashboard.admin');
Route::get('/user/dashboard', [App\Http\Controllers\DashboardController::class, 'user_dashboard'])->name('dashboard.user');