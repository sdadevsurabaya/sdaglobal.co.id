<?php

use App\Http\Controllers\Front\About\HistoryController;
use App\Http\Controllers\Front\About\LeadershipContoller;
use App\Http\Controllers\Front\About\WayContoller;
use App\Http\Controllers\Front\Business\BusinessController;
use App\Http\Controllers\Front\Careers\CareersController;
use App\Http\Controllers\Front\Contact\ContactController;
use App\Http\Controllers\Front\Landing\LandingController;
use App\Http\Controllers\Front\News\NewsController;
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
Route::get('/history', [HistoryController::class, 'history'])->name('about.history');
Route::get('/way', [WayContoller::class, 'way'])->name('about.way');
Route::get('/leadership', [LeadershipContoller::class, 'leadership'])->name('about.leadership');
Route::get('/business', [BusinessController::class, 'business'])->name('business');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/careers', [CareersController::class, 'careers'])->name('careers.careers');
Route::get('/policy', [PolicyController::class, 'policy'])->name('policy.policy');
Route::get('/terms', [TermsController::class, 'terms'])->name('policy.terms');


// Route::get('/', function () {
//     return file_get_contents(public_path('ui/index.html'));
// });

// Route::get('/history', function () {
//     return file_get_contents(public_path('ui/history.html'));
// });


// Route::get('/way', function () {
//     return file_get_contents(public_path('ui/way.html'));
// });

// Route::get('/leadership', function () {
//     return file_get_contents(public_path('ui/leadership.html'));
// });

// Route::get('/businesses', function () {
//     return file_get_contents(public_path('ui/businesses.html'));
// });

// Route::get('/news', function () {
//     return file_get_contents(public_path('ui/news.html'));
// });

// Route::get('/careers', function () {
//     return file_get_contents(public_path('ui/careers.html'));
// });

// Route::get('/careers1', function () {
//     return file_get_contents(public_path('ui/careers1.html'));
// });

// Route::get('/careers2', function () {
//     return file_get_contents(public_path('ui/careers2.html'));
// });

// Route::get('/careers3', function () {
//     return file_get_contents(public_path('ui/careers3.html'));
// });

// Route::get('/careers4', function () {
//     return file_get_contents(public_path('ui/careers4.html'));
// });

// Route::get('/careers5', function () {
//     return file_get_contents(public_path('ui/careers5.html'));
// });

// Route::get('/careers6', function () {
//     return file_get_contents(public_path('ui/careers6.html'));
// });

// Route::get('/careers7', function () {
//     return file_get_contents(public_path('ui/careers7.html'));
// });

// Route::get('/contact', function () {
//     return file_get_contents(public_path('ui/contact.html'));
// });

// Route::get('/privacy', function () {
//     return file_get_contents(public_path('ui/privacy.html'));
// });

// Route::get('/terms', function () {
//     return file_get_contents(public_path('ui/terms.html'));
// });
