<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [Controller::class, 'index']);

Route::resource('blogs', BlogController::class);
// Route::get('/blog', [BlogController::class, 'show']);

Route::resource('categories', CategoryController::class);
Route::resource('produits', ProductController::class);
Route::get('/produits/{category}/{slug}', [ProductController::class, 'showProduct']);



Route::get('/qui-sommes-nous', function () {
    return view('main.qui-sommes-nous');
});
Route::get('/distribution', [DistributionController::class, 'index']);



// Route::get('/details-produit', function () {
//     return view('main.details-produit');
// });

Route::get('/nos-atouts', function () {
    return view('main.nos-atouts');
});

Route::get('/contactez-nous', function () {
    return view('main.contact');
});

Route::resource('contact', ContactController::class);

Route::get('/ar', [LocalizationController::class, 'index']);
Route::get('lang/change', [LocalizationController::class, 'lang_change'])->name('changeLang');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
