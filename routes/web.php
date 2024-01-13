<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::post('reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // ============================================================================================
    // ====================================== ADMIN ROUTES ========================================
    // ============================================================================================
    Route::prefix('dashboard')->middleware('admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('users', [AdminController::class, 'index'])->name('users');
        Route::get('deleteuser/{id}', [AdminController::class, 'delete'])->name('deleteuser');
        Route::get('foodadd', [AdminController::class, 'addfoodView'])->name('foodadd');
        Route::post('foodAdd', [AdminController::class, 'addfood'])->name('foodAdd');
        Route::get('foodtable', [AdminController::class, 'food'])->name('foodtable');
        Route::get('fooddelete/{id}', [AdminController::class, 'destroy'])->name('fooddelete');
        Route::get('foodupdate/{id}', [AdminController::class, 'updateshow'])->name('foodupdate');
        Route::post('foodUpdate/{id}', [AdminController::class, 'update'])->name('foodUpdate');
        Route::get('reservations', [AdminController::class, 'reservations'])->name('reservations');
        Route::get('reservationdelete/{id}',[AdminController::class,'reservationDelete'])->name('resrDelete');
        Route::post('unread', [AdminController::class, 'unread'])->name('unread');
        Route::get('chefadd',[AdminController::class,'viewAddchef'])->name('chefadd');
        Route::post('chefAdd',[AdminController::class,'addchef'])->name('chefAdd');
        Route::get('cheftable',[AdminController::class,'chefs'])->name('cheftable');
        Route::get('chefupdate/{id}',[AdminController::class,'chefupdateView'])->name('chefupdate');
        Route::post('chefUpdate/{id}',[AdminController::class,'chefupdate'])->name('chefUpdate');
        Route::get('chefdelete/{id}',[AdminController::class,'chefdelete'])->name('chefdelete');
    });
});


require __DIR__ . '/auth.php';
