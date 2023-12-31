<?php

use Illuminate\Support\Facades\Auth;

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FaizCobaController;
use App\Http\Controllers\FeedbackController;

// Route coba hanya untuk percobaan.
Route::resource('faizCoba', FaizCobaController::class)->except(['update', 'show']);

Route::get('/assets/private/img/encrypt/dir/protect/image/{dir?}/{filename?}', [ImageController::class, 'urlGen'])->name('img.retrieve');

Route::prefix('user-area')->middleware('auth')->group(function () {
    Route::resource('answer', AnswerController::class)->only(['store', 'update', 'delete']);
    Route::resource('feedback', FeedbackController::class)->except(['show, update']);
});
