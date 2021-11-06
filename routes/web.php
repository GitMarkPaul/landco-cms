<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;

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

# Password Reset
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin/', 'middleware' => 'auth'], function() {
    // Manage Account
    Route::group(['prefix' => 'settings/'], function() {
        Route::get('index', [SettingsController::class, 'index'])->name('settings');

        // File Manager
        Route::get('file-manager', [SettingsController::class, 'files'])->name('files');
        Route::put('rename', [SettingsController::class, 'rename'])->name('file_rename');
        Route::delete('delete', [SettingsController::class, 'delete_file'])->name('file_delete');

        // Password
        Route::get('password', [SettingsController::class, 'password'])->name('password');
        Route::post('update-password', [SettingsController::class, 'update_password'])->name('update_password');
    });

    // Publications
    Route::group(['prefix' => 'publications/'], function() {
        Route::get('listing', [PublicationController::class, 'index'])->name('pub_index');
        Route::get('create', [PublicationController::class, 'create'])->name('pub_create');
        Route::post('store', [PublicationController::class, 'store'])->name('pub_store');
        Route::get('edit/{slug_url}', [PublicationController::class, 'edit'])->name('pub_edit');
        Route::put('update/{id}', [PublicationController::class, 'update'])->name('pub_update');
        Route::delete('delete', [PublicationController::class, 'delete'])->name('pub_delete');
        Route::post('restore', [PublicationController::class, 'restore'])->name('pub_restore');
        Route::delete('destroy', [PublicationController::class, 'destroy'])->name('pub_destroy');
    
        // Category
        Route::group(['prefix' => 'category/'], function() {
            Route::get('', [PublicationCategoryController::class, 'index'])->name('pub_cat_index');
            Route::post('store', [PublicationCategoryController::class, 'store'])->name('pub_cat_store');
            Route::put('update', [PublicationCategoryController::class, 'update'])->name('pub_cat_update');
            Route::delete('delete', [PublicationCategoryController::class, 'delete'])->name('pub_cat_delete');
        });

        // Archives
        Route::get('archives', [PublicationController::class, 'archive'])->name('pub_archive');
    });
});

