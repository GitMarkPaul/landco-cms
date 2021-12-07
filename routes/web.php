<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CareerController;
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

// Guest
Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('about-us', [GuestController::class, 'about_us'])->name('about_us');
Route::get('projects', [GuestController::class, 'projects'])->name('projects');
Route::get('projects/parks', [GuestController::class, 'projectsParks'])->name('projects.parks');
Route::group(['prefix' => 'projects/parks'], function() {
    Route::get('hacienda-escudero', [GuestController::class, 'haciendaEscudero'])->name('hacienda_escudero');
    Route::get('tribeca', [GuestController::class, 'tribeca'])->name('tribeca');
    Route::get('stonecrest', [GuestController::class, 'stonecrest'])->name('stonecrest');
    Route::get('montelago', [GuestController::class, 'montelago'])->name('montelago');
    Route::get('woodgrove-park', [GuestController::class, 'woodgrovePark'])->name('woodgrove_park');
    Route::get('waterwood-park', [GuestController::class, 'waterwoodPark'])->name('waterwood_park');
    Route::get('ponderosa-leisure-farms', [GuestController::class, 'ponderosaLeisureFarms'])->name('ponderosa_leisure_farms');
    Route::get('courtyard', [GuestController::class, 'courtyard'])->name('courtyard');
    Route::get('leisure-farms', [GuestController::class, 'leisureFarms'])->name('leisure_farms');
});
Route::get('projects/peaks', [GuestController::class, 'projectsPeaks'])->name('projects.peaks');
Route::get('projects/shores', [GuestController::class, 'projectsShores'])->name('projects.shores');
Route::group(['prefix' => 'projects/shores'], function() {
    Route::get('terrazas-de-punta-fuego', [GuestController::class, 'terrazasDePuntaFuego'])->name('terrazas_de_punta_fuego');
    Route::get('peninsula-de-punta-fuego', [GuestController::class, 'peninsulaDePuntaFuego'])->name('peninsula_de_punta_fuego');
});
Route::get('beachtowns', [GuestController::class, 'beachtowns'])->name('beachtowns');

Route::group(['prefix' => 'projects/beachtowns'], function() {
    Route::get('casobe', [GuestController::class, 'casobe'])->name('casobe');
    Route::get('club-laiya', [GuestController::class, 'clubLaiya'])->name('club_laiya');
    Route::get('costa-azalea', [GuestController::class, 'costaAzalea'])->name('costa_azalea');
    Route::get('playa-laiya', [GuestController::class, 'playaLaiya'])->name('playa_laiya');
    Route::get('playa-calatagan', [GuestController::class, 'playaCalatagan'])->name('playa_calatagan');
    Route::get('playa-azalea', [GuestController::class, 'playaAzalea'])->name('playa_azalea');
});
Route::get('faq', [GuestController::class, 'faq'])->name('faq');
Route::get('privilege-club', [GuestController::class, 'privilege_club'])->name('privilege_club');
Route::get('publications/blogs', [GuestController::class, 'blogs'])->name('publications.blogs');
Route::get('publications/news', [GuestController::class, 'news'])->name('publications.news');
Route::get('publications/media', [GuestController::class, 'media'])->name('publications.media');
Route::get('publications/magazine', [GuestController::class, 'magazine'])->name('publications.magazine');
Route::get('publications', [GuestController::class, 'publications'])->name('publications');
Route::get('publications/details/{category_id}/{id}/{slug_url}', [GuestController::class, 'details'])->name('details');
Route::get('careers', [GuestController::class, 'careers'])->name('careers');
Route::get('careers/{created_at}/{slug}', [GuestController::class, 'career_details'])->name('career_details');
Route::get('contact-us', [GuestController::class, 'contact_us'])->name('contact_us');
Route::get('terms-of-use', [GuestController::class, 'terms_of_use'])->name('terms_of_use');
Route::get('privacy-policy', [GuestController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('hlurb', [GuestController::class, 'hlurb'])->name('hlurb');

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
        Route::get('edit/{category_id}/{id}/{slug_url}', [PublicationController::class, 'edit'])->name('pub_edit');
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

    // Careers
    Route::resource('careers', CareerController::class)->except('show')->shallow();
});

