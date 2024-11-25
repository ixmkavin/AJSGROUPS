<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\PortfolioController;  
use App\Http\Controllers\ServiceController;

//navBar
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog1', [BlogController::class, 'blog1'])->name('blog1');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/underConstruction', [HomeController::class, 'underConstruction'])->name('underConstruction');

//pdf
Route::get('/Brochure', [HomeController::class, 'Brochure'])->name('Brochure');
// Route::get('/Downloadlist', [PricingController::class, 'Downloadlist'])->name('Downloadlist');

//pricing
// Route::get('/pricelist', [PricingController::class, 'pricelist']);
// Route::get('/view-pdf', [PricingController::class, 'viewPdf']);

//newsletter
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//Terms and Conditions / privacy Policy
Route::get('/termsandcondition', [HomeController::class, 'tc'])->name('termsandcondition');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');

//Service Pages
Route::get('/services/{service}', [ServiceController::class, 'showService'])->name('services.show');

//404 Error
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});