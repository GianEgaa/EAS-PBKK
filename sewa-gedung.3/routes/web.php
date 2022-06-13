<?php

use App\Models\Gedung;
use App\Models\User;
use App\Models\insertGedung;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/search', [App\Http\Controllers\GedungController::class, 'index'])->name('search');

Route::post('/insert', [App\Http\Controllers\gedungInsertController::class, 'uploadGedung'])->name('manager.insert');

Route::get('/booking/{id}', [App\Http\Controllers\bookingController::class, 'show'])->name('booking');

Route::post('/booked', [App\Http\Controllers\dateInsertController::class, 'uploadDate'])->name('booked');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/logout', [App\Http\Controllers\LogOutController::class, 'perform'])->name('logout');
});

Route::get('santri/tampil', [App\Http\Controllers\gedungInsertController::class, 'tampilsantri'])->name('tampilsantri')->middleware('auth');

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
    Route::get('/super-admin/home', [App\Http\Controllers\HomeController::class, 'superAdminHome'])->name('super.admin.home');
});

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [App\Http\Controllers\HomeController::class, 'managerHome'])->name('manager.home');
});