<?php

use App\Http\Controllers\Auth\SocialAccountController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('test', function (){
    return view('test');
})->name('test');

Route::get('gym', [\App\Http\Controllers\IndexController::class, 'gym'])->name('gym.index');

Route::get('login/{provider}', [SocialAccountController::class, 'redirectToProvider'])->name('login.provider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');


