<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubscribersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', [PostController::class,'index'])->name('post.index');
Route::post('posts',[PostController::class,'store'])->name('post.store');
Route::delete('/{post}/delete','PostController@destroy')->name('post.delete');

Route::get('sites', [SiteController::class,'index'])->name('site.index');
Route::post('sites', [SiteController::class,'store'])->name('site.store');

Route::get('subscribers', [SubscribersController::class,'index'])->name('subscribers.index');
Route::post('subscribers', [SubscribersController::class,'store'])->name('subscribers.store');