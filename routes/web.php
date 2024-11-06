<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

//Route::get('/', [MainController:s:class,'index']);
Route::get('/', [MainController::class, 'index'])->name('homepage');

Route::get('aboutus', [MainController::class, 'aboutus'])->name('aboutpage');


Route::get('contactus', [MainController::class, 'contactus'])->name('contactpage');
