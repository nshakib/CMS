<?php

use App\Http\Controllers\CategoryController;
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

Auth::routes([
    'register' => false
]);


//dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => ['web','auth']], function(){

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    //categories
    Route::resource('/categories',CategoryController::class);
});
