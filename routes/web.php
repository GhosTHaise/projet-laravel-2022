<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

//Conge Controller
Route::get('conges',[CongeController::class, 'index'])->name('conge.index');   
Route::get('send-forms',[CongeController::class, 'create'])->name('conge.create');
Route::post('send-forms',[CongeController::class, 'store'])->name('conge.store');

//Responsable Controller
Route::get('validation',[ResponsableController::class, 'validation'])->name('conge.validation');
Route::get('liste',[ResponsableController::class, 'liste'])->name('conge.liste');  


Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::resource('clients', ClientsController::class);


Route::resource('personnels', PersonnelsController::class);


Route::resource('postes', PostesController::class);


Route::get('display-post', [PostsController::class, 'index'])->name('posts.index');

Route::get('create-post', [PostsController::class, 'create'])->name('posts.create')->middleware('can:access-admin');

Route::post('save-post', [PostsController::class, 'save'])->name('posts.save');

/* Route::get('/dashboard', function () {
    return view('dashboard');
}); */

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get("/mailbox",[MessagesController::class,"index"])->middleware(['auth'])->name("mailbox");
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
