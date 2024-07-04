<?php

use App\Http\Controllers\Front\Account\ContactController;
use App\Http\Controllers\Front\IndustriesController;
use App\Http\Controllers\Front\LandingController;
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
