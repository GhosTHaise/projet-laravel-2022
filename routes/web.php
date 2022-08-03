<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PersonnelsController;

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

Route::get('/',[LoginController::class,'index'])->name("login");

Route::resource('clients', ClientsController::class);


Route::resource('personnels', PersonnelsController::class);


Route::resource('postes', PostesController::class);


Route::get('display-post', [PostsController::class, 'index'])->name('posts.index');

Route::get('create-post', [PostsController::class, 'create'])->name('posts.create');

Route::post('save-post', [PostsController::class, 'save'])->name('posts.save');

Route::get('/dashboard', function () {
    return view('dashboard');
});




