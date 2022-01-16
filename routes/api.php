<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PitchDeckController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// company routes
Route::post('company', [CompanyController::class, 'store'])->name('company.store'); 
Route::get('companies', [CompanyController::class, 'index'])->name('company.index');
Route::get('company/{company}', [CompanyController::class, 'show'])->name('company.show');

Route::post('pitch-deck', [PitchDeckController::class, 'store'])->name('pitch-deck.store');
