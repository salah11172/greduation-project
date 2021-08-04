<?php

use App\Http\Controllers\CommentController;
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
    return view('layout.layout');
});

Route::get('contact-us/contact', [CommentController::class, 'index'])->name('comment.index');
Route::get('contact-us/contact/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('contact/store', [CommentController::class, 'store'])->name('comment.store');

