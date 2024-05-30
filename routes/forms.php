<?php

use App\Http\Controllers\GitWebhookController;
use Illuminate\Support\Facades\Route;


Route::get('/form1', function (){
    return view('forms.form1');
})->name('form1');

Route::get('/form2', function (){
    return view('forms.form2');
})->name('form2');

Route::get('/form3', function (){
    return view('forms.form3');
})->name('form3');

Route::get('/form4', function (){
    return view('forms.form4');
})->name('form4');

Route::get('/form5', function (){
    return view('forms.form5');
})->name('form5');

Route::get('/form6', function (){
    return view('forms.form6');
})->name('form6');

Route::get('/form7', function (){
    return view('forms.form7');
})->name('form7');

Route::get('/form8', function (){
    return view('forms.form8');
})->name('form8');

Route::get('/form9', function (){
    return view('forms.form9');
})->name('form9');

Route::get('/form10', function (){
    return view('forms.form10');
})->name('form10');

Route::get('/form11', function (){
    return view('forms.form11');
})->name('form11');

Route::get('/form12', function (){
    return view('forms.form12');
})->name('form12');

Route::get('/form13', function (){
    return view('forms.form13');
})->name('form13');
