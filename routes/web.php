<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\IndustriesController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\Policy\PolicyController;
use App\Http\Controllers\Front\Policy\TermsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('comingsoon');
// });

Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/industries', [IndustriesController::class, 'industries'])->name('industries');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/policy', [PolicyController::class, 'policy'])->name('policy.policy');
Route::get('/terms', [TermsController::class, 'terms'])->name('policy.terms');
