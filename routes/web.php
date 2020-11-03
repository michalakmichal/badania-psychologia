<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Th
ese
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// API


Route::get('/{any}', function () {
    return view('frontend');
})->where('any', '.*');