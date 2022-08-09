<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\homeController;

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

Route::get('/', function () 
{
    return view('components.web.index',[homeController::class,'index']);
});

// Route::post('login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('existingUserLogin');