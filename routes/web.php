<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);
Route::resource('about', AboutController::class);
Route::get('/ceo_message', [AboutController::class, 'ceo_message'])->name('ceo_message');
Route::get('/statement', [AboutController::class, 'statement'])->name('statement');
Route::get('/why', [AboutController::class, 'why'])->name('why');
Route::get('/team', [AboutController::class, 'team'])->name('team');


Route::get('en', [LangController::class, 'lang_en'])->name('en');
Route::get('jp', [LangController::class, 'lang_jp'])->name('jp');
Route::get('kr', [LangController::class, 'lang_kr'])->name('kr');
Route::get('th', [LangController::class, 'lang_th'])->name('th');
