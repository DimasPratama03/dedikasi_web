<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullyFundedPremiumController;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/fully-funded-premium/create', [FullyFundedPremiumController::class, 'create'])->name('fully-funded-premium.create');
Route::post('/fully-funded-premium', [FullyFundedPremiumController::class, 'store'])->name('fully-funded-premium.store');

Route::get('/fully-funded-premium', [FullyFundedPremiumController::class, 'index'])->name('fully-funded-premium.index');
Route::get('/fully-funded-premium/{id}/edit', [FullyFundedPremiumController::class, 'edit'])->name('fully-funded-premium.edit');
Route::post('/fully-funded-premium/{id}', [FullyFundedPremiumController::class, 'update'])->name('fully-funded-premium.update');
Route::delete('/fully-funded-premium/{id}', [FullyFundedPremiumController::class, 'destroy'])->name('fully-funded-premium.destroy');