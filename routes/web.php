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
    return view('heaven.heaven');
})->name('heaven');

Route::get('/endoftheworld', function (){
    return view('endoftheworld');
})->name('endoftheworld');

Route::get('/heaven2', function (){
    return view('heaven.heaven2');
})->name('heaven2');

Route::get('/heaven3', function (){
    return view('heaven.heaven3');
})->name('heaven3');

Route::get('/heaven4', function (){
    return view('heaven.heaven4');
})->name('heaven4');

Route::get('/notreal1', function (){
    return view('notreal.notreal1');
})->name('notreal1');

Route::get('/notreal2', function (){
    return view('notreal.notreal2');
})->name('notreal2');

Route::get('/notreal3', function (){
    return view('notreal.notreal3');
})->name('notreal3');

Route::get('/notreal4', function (){
    return view('notreal.notreal4');
})->name('notreal4');

Route::get('/notreal5', function (){
    return view('notreal.notreal5');
})->name('notreal5');

Route::get('/endoftime', function (){
    return view('endoftime');
})->name('endoftime');

Route::get('/feelinglucky', function (){
    return view('fellinglucky.fellinglucky');
})->name('feelinglucky');

Route::get('/helpline', function (){
    return view('fellinglucky.helpline');
})->name('helpline');

Route::get('/mirror', function (){
    return view('fellinglucky.mirror');
})->name('mirror');

Route::get('/almostwikipedia', function (){
    return view('fellinglucky.almostwikipedia');
})->name('almostwikipedia');

Route::get('/wrongtime', function (){
    return view('fellinglucky.wrongtime');
})->name('wrongtime');

Route::get('/virus2', function (){
    return view('virus2');
})->name('virus2');

Route::get('/you', function (){
    return view('you');
})->name('you');

Route::get('/security', function (){
    return view('security');
})->name('security');

Route::get('/angel', function (){
    return view('angel');
})->name('angel');

Route::get('/headonthefloor', function (){
    return view('headonthefloor');
})->name('headonthefloor');

Route::get('/milkpack', function (){
    return view('milkpack');
})->name('milkpack');

Route::get('/institute', function (){
    return view('institute');
})->name('institute');

Route::get('/password', function (){
    return view('password');
})->name('password');

Route::get('/employee', function (){
    return view('employee_homepage');
})->name('employee');

Route::get('/badge', function (){
    return view('badge');
})->name('badge');

Route::get('/service-worker-assets', function () {
    $publicPath = public_path();
    $allFiles = File::allFiles($publicPath);
    $files = [];

    foreach ($allFiles as $file) {
        $filePath = $file->getRealPath();
        if (str_contains($filePath, $publicPath)) { // Ensure it's within public directory
            $files[] = str_replace($publicPath, '', $filePath);
        }
    }

    return Response::json($files);
});

Route::get('/handbook', function (){
    return view('handbook');
})->name('handbook');

Route::get('/echolalia', function (){
    return view('echolalia');
})->name('echolalia');

Route::get('/threshold', function (){
    return view('threshold');
})->name('threshold');

Route::get('/threshold2', function (){
    return view('threshold2');
})->name('threshold2');

Route::get('/threshold3', function (){
    return view('threshold3');
})->name('threshold3');

require __DIR__.'/kenopsis.php';
require __DIR__.'/forms.php';

