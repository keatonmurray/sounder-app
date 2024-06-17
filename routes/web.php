<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/* DEFAULT ROUTE
Route::get('/', function () {
    return view('welcome');
});
*/
 
Route::get('/', [FrontController::class, 'index'])->name('welcome');