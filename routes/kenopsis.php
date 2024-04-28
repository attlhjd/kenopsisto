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

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/benotafraid', function () {
    return view('benotafraid');
})->name('benotafraid');

Route::get('/playdead', function () {
    return view('playdead');
})->name('playdead');

Route::get('/theabyss', function () {
    return view('theabyss');
})->name('theabyss');

Route::get('/nearme1', function () {
    return view('nearme/nearme1');
})->name('nearme1');

Route::get('/nearme2', function () {
    return view('nearme/nearme2');
})->name('nearme2');

Route::get('/nearme3', function () {
    return view('nearme/nearme3');
})->name('nearme3');

Route::get('/nearme4', function () {
    return view('nearme/nearme4');
})->name('nearme4');

Route::get('/nearme5', function () {
    return view('nearme/nearme5');
})->name('nearme5');

Route::get('/nearme6', function () {
    return view('nearme/nearme6');
})->name('nearme6');

Route::get('/nearme7', function () {
    return view('nearme/nearme7');
})->name('nearme7');

Route::get('/nearme8', function () {
    return view('nearme/nearme8');
})->name('nearme8');

Route::get('/nearme9', function () {
    return view('nearme/nearme9');
})->name('nearme9');

Route::get('/nearme10', function () {
    return view('nearme/nearme10');
})->name('nearme10');

Route::get('/nearme11', function () {
    return view('nearme/nearme11');
})->name('nearme11');

Route::get('/nearme12', function () {
    return view('nearme/nearme12');
})->name('nearme12');

Route::get('/nearme13', function () {
    return view('nearme/nearme13');
})->name('nearme13');

Route::get('/nearme14', function () {
    return view('nearme/nearme14');
})->name('nearme14');

Route::get('/nearme15', function () {
    return view('nearme/nearme15');
})->name('nearme15');

Route::get('/nearme16', function () {
    return view('nearme/nearme16');
})->name('nearme16');

Route::get('/nearme17', function () {
    return view('nearme/nearme17');
})->name('nearme17');

Route::get('/video_scenario_3', function () {
    return view('video_scenario_3');
})->name('video_scenario_3');




