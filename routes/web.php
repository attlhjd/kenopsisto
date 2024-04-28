<?php

use App\Http\Controllers\GitWebhookController;
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
Route::post('/git-webhook', [GitWebhookController::class,'handle'])->name('git-webhook');

Route::get('/', function () {
    return view('portail');
})->name('portail');

Route::get('/iiiiiiiiiiiiiiiiiiiiiiiiiiiiii', function () {
    return view('about');
})->name('old_about');

Route::get('/llllllllllllllllllllllllllllllll', function () {
    return view('home');
})->name('old_home');




require __DIR__.'/kenopsis.php';
