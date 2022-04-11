<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
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

// Route::get('/localization/{language}',LocalizationController::class)->name('localization.switch');
Route::get('/localization/{language}',[LocalizationController::class,'switch'])->name('localization.switch');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});
