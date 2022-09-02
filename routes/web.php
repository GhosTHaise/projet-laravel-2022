<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResponsableAuthController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\ValidationController;
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

//Responsable conge view Controller
Route::get('/validation',[CongeController::class, 'validation'])->middleware(['auth'])->name('conge.validation');
Route::post('/validation_confimer/{id}',[CongeController::class, 'valide_conge'])->middleware(['auth'])->name('conge.validation.confirmer');
Route::post('/validation_refuser/{id}',[CongeController::class, 'refuse_conge'])->middleware(['auth'])->name('conge.validation.refuser');
/* Route::get('liste',[ResponsableController::class, 'liste'])->name('conge.liste');  
Route::get('/logout',[ValidationController::class, 'logout'])->name('conge.validation'); */
//

//
Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::resource('clients', ClientsController::class)->middleware(['auth']);


Route::resource('emp', PersonnelsController::class)->middleware(['auth']);


Route::resource('postes', PostesController::class)->middleware(['auth']);

Route::resource("mailbox",MessagesController::class)->middleware(['auth']);

//dashboardController
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
