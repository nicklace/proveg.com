<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\StaticPage;
use App\Http\Controllers\LeadController;

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

//Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [StaticPage::class, 'index'])->name('index');
    Route::get('/why', [StaticPage::class, 'why'])->name('why');
    Route::get('/guidelines', [StaticPage::class, 'guidelines'])->name('guidelines');
});

Route::post('/contact', [LeadController::class, 'contact'])->name('contact');
