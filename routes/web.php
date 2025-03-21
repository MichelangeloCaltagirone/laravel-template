<?php

use App\Http\Controllers\FormController;
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

/*rotta per la HomePage */
Route::get('/LandingPage', function () {
    return view('pages.home');
});

/*Rotta per salvare i dati del form in un CSV in public */
Route::post('/save-form', [FormController::class, 'store'])->name('saveForm');
