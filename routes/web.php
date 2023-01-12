<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', function () {
    return view('category', [
        'categories' => Category::withCount('rooms')->get(),
    ]);
})->name('category');

Route::get('/listing', function () {
    return view('listing', [
        'categories' => Category::with('rooms')->get(),
    ]);
})->name('listing');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
