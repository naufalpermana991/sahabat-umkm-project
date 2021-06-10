<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventPackageController;
use App\Http\Controllers\Admin\GalleryPackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
    
Route::get('/event', [EventController::class, 'index'])
    ->name('event');
Route::get('/event/details', [EventController::class, 'detailevent'])
    ->name('event-details');
Route::get('/event/details/checkout', [EventController::class, 'checkoutevent'])
    ->name('event-checkout');
Route::get('/event/detailevent/registersuccess', [EventController::class, 'success'])
    ->name('event-details-success');


Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri');

Route::get('/katalog', [KatalogController::class, 'index'])
    ->name('katalog');
Route::get('/katalog/detailkatalog', [KatalogController::class, 'detailkatalog'])
    ->name('detail-katalog');

Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');
    

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('event', '\App\Http\Controllers\Admin\EventPackageController');
    Route::resource('gallery', '\App\Http\Controllers\Admin\GalleryPackageController');
    });

Auth::routes(['verify' => true]);


