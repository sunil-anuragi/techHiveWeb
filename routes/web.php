<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* sateesh yadav */
Route::get('/aboutus', [App\Http\Controllers\CommanController::class, 'about'])->name('aboutus');
Route::get('/team', [App\Http\Controllers\CommanController::class, 'ourTeam'])->name('team');
Route::get('/teamdetail', [App\Http\Controllers\CommanController::class, 'teamDetail'])->name('teamdetail');
Route::get('/testimonials', [App\Http\Controllers\CommanController::class, 'testiMonials'])->name('testimonials');
Route::get('/pricing', [App\Http\Controllers\CommanController::class, 'pricing'])->name('pricing');
Route::get('/portfolio', [App\Http\Controllers\CommanController::class, 'ourportfolio'])->name('portfolio');
Route::get('/portfoliodetails', [App\Http\Controllers\CommanController::class, 'portfolioDetails'])->name('portfoliodetails');
Route::get('/faq', [App\Http\Controllers\CommanController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\CommanController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\CommanController::class, 'service'])->name('service');
Route::get('/service/details', [App\Http\Controllers\CommanController::class, 'serviceDetails'])->name('service/details');

Route::get('/blog', [App\Http\Controllers\CommanController::class, 'blog'])->name('blog');
Route::get('/blog/sideber', [App\Http\Controllers\CommanController::class, 'blogSideber'])->name('blog/sideber');
Route::get('/blog/details', [App\Http\Controllers\CommanController::class, 'blogDetails'])->name('blog/details');

//contact
Route::post('/submit-contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


