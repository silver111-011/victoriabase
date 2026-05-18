<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ContactController;



// ─── Public marketing pages ───────────────────────────────────────────────────

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/about',        fn() => view('pages.about'))->name('about');
Route::get('/integrations', fn() => view('pages.integrations'))->name('integrations');
Route::get('/changelog',    fn() => view('pages.changelog'))->name('changelog');
Route::get('/roadmap',      fn() => view('pages.roadmap'))->name('roadmap');
Route::get('/docs',         fn() => view('pages.docs'))->name('docs');
Route::get('/help',         fn() => view('pages.help'))->name('help');
Route::get('/status',       fn() => view('pages.status'))->name('status');
Route::get('/community',    fn() => view('pages.community'))->name('community');

// Demo
Route::get('/demo',  fn() => view('pages.demo'))->name('demo');
Route::post('/demo', [\App\Http\Controllers\DemoController::class, 'submit'])->name('demo.submit');

// Contact
Route::get('/contact',  fn() => view('pages.contact'))->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

// ─── Legal pages ──────────────────────────────────────────────────────────────

Route::get('/privacy',  fn() => view('legal.privacy'))->name('privacy');
Route::get('/terms',    fn() => view('legal.terms'))->name('terms');
Route::get('/dpa',      fn() => view('legal.dpa'))->name('dpa');

// ─── Solution pages (one per org type) ───────────────────────────────────────

Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/mfi',     fn() => view('solutions.mfi'))->name('mfi');
    Route::get('/sacco',   fn() => view('solutions.sacco'))->name('sacco');
    Route::get('/ngo',     fn() => view('solutions.ngo'))->name('ngo');
    Route::get('/fintech', fn() => view('solutions.fintech'))->name('fintech');
    Route::get('/sme',     fn() => view('solutions.sme'))->name('sme');
});

// ─── Auth routes (Laravel Breeze / Jetstream will publish these) ──────────────
// If using Breeze: run `php artisan breeze:install` and it overwrites below.

Route::get('/register', fn() => view('auth.register'))->name('register');
Route::get('/login',    fn() => view('auth.login'))->name('login');

// ─── Authenticated app routes ─────────────────────────────────────────────────

Route::middleware(['auth'])->group(function () {

    // After setup wizard is complete, redirect here
    Route::get('/dashboard', fn() => view('app.dashboard'))->name('dashboard');

    // Setup wizard — Module 1
    // Guarded by SetupIncompleteMiddleware: if setup done, redirect to dashboard
    Route::prefix('setup')->name('setup.')->group(function () {
        Route::get('/',           [\App\Http\Controllers\SetupWizardController::class, 'index'])->name('index');
        Route::get('/{step}',     [\App\Http\Controllers\SetupWizardController::class, 'show'])->name('step');
        Route::post('/{step}',    [\App\Http\Controllers\SetupWizardController::class, 'save'])->name('save');
        Route::post('/complete',  [\App\Http\Controllers\SetupWizardController::class, 'complete'])->name('complete');
    });

});
