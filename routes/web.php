<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Publications

Route::group(['prefix' => 'admin/publications/'], function() {
    Route::get('listing', [PublicationController::class, 'index'])->name('pub_index');
    Route::get('create', [PublicationController::class, 'create'])->name('pub_create');
    Route::post('store', [PublicationController::class, 'store'])->name('pub_store');
    Route::get('edit/{slug_url}', [PublicationController::class, 'edit'])->name('pub_edit');
    Route::put('update/{id}', [PublicationController::class, 'update'])->name('pub_update');
    Route::delete('delete', [PublicationController::class, 'delete'])->name('pub_delete');

    // Category
    Route::group(['prefix' => 'category/'], function() {
        Route::get('index', [PublicationCategoryController::class, 'index'])->name('pub_cat_index');
        Route::post('store', [PublicationCategoryController::class, 'store'])->name('pub_cat_store');
    });
});
