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

Route::get('/wormholes', function () {
    return view('wormhole');
})->name('wormholes');

Route::get('/skinwalker', function () {
    return view('skinwalker');
})->name('skinwalker');

Route::get('/milk', function () {
    return view('milk_restart');
})->name('milk');

Route::get('/house', function () {
    return view('house');
})->name('house');

Route::get('/fataorgana', function () {
    return view('fataorgana');
})->name('fataorgana');

Route::get('/exulansis', function () {
    return view('exulansis');
})->name('exulansis');

Route::get('/files', function () {
    return view('files');
})->name('files');

Route::get('/audio', function () {
    return view('audio');
})->name('audio');

Route::get('/doc_txt', function () {
    return view('doc_txt');
})->name('doc_txt');

Route::get('/virus', function () {
    return view('virus');
})->name('virus');

Route::get('/congrats', function () {
    return view('congrats');
})->name('congrats');

Route::get('/sword', function () {
    return view('sword');
})->name('sword');

Route::get('/transcript', function () {
    return view('transcript');
})->name('transcript');

Route::get('/reconnaissance', function (){
    return view('reconnaissance');
})->name('reconnaissance');

Route::get('/complete', function (){
    return view('complete');
})->name('complete');

Route::get('/averynormalportal', function (){
    return view('averynormalportal');
})->name('averynormalportal');

Route::get('/averynormalwebsite', function (){
    return view('averynormalwebsite');
})->name('averynormalwebsite');

Route::get('/informations', function (){
    return view('informations');
})->name('informations');

Route::get('/aboutus', function (){
    return view('aboutus');
})->name('aboutus');

Route::get('/products', function (){
    return view('products');
})->name('products');

Route::get('/heaven', function (){
    return view('heaven');
})->name('heaven');

Route::get('/endoftheworld', function (){
    return view('endoftheworld');
})->name('endoftheworld');

require __DIR__.'/kenopsis.php';
require __DIR__.'/forms.php';

