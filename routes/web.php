<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('main.index');
});

Route::resource('categories', CategoryController::class);
Route::resource('produits', ProductController::class);
Route::get('/produits/{category}/{slug}', [ProductController::class, 'showProduct']);



Route::get('/qui-sommes-nous', function () {
    return view('main.qui-sommes-nous');
});


// Route::get('/details-produit', function () {
//     return view('main.details-produit');
// });

Route::get('/nos_atouts', function () {
    return view('main.nos-atouts');
});

Route::get('/contactez-nous', function () {
    return view('main.contact');
});

Route::resource('contact', ContactController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
