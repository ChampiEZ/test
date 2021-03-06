<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/candidate/{id}' , [ CandidateController::class, 'show'])->middleware('auth')->name('candidates.show');
Route::delete('/candidate/delete/{id}' , [ CandidateController::class, 'destroy'])->middleware('auth')->name('candidates.destroy');