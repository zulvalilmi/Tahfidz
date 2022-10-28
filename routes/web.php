<?php

use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\TahfidzController;
use App\Http\Controllers\Template\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/Hay')->middleware(['auth'])->group(function(){
  Route::controller(DashboardController::class)->group(function () {
        Route::get('/welcome', 'index');
    });

    Route::controller(JurusanController::class)->group(function () {
        Route::get('/jurusan', 'index')->name('jurusan.index');
        Route::post('jurusan/store', 'store')->name('jurusan.store');
        Route::put('jurusan/update', 'update')->name('jurusan.update');
        Route::delete('jurusan/destroy', 'destroy')->name('jurusan.destroy');
    });

    Route::controller(TahfidzController::class)->group(function () {
        Route::get('/tahfidz', 'index')->name('tahfidz.index');
    });
});
  



// Route::get('/blade', [App\Http\Controllers\BladeController::class, 'home'])->name('base');
// Route::get('/detail', [App\Http\Controllers\BladeController::class, 'detail'])->name('detail');
