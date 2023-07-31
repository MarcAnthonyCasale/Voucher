<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\VoucherController;
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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user');


 /**
 * User Routes
 */
    Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher.index');
    Route::get('/voucher/create', function () {
      return view('users.create');
      });
    Route::post('/voucher/store', [VoucherController::class, 'store'])->name('voucher.store');
    Route::get('/voucher/show/{id}', [VoucherController::class, 'show'])->name('voucher.show');
    Route::get('/voucher/edit/{id}', [VoucherController::class, 'edit'])->name('voucher.edit');
    Route::post('update-voucher/{id}', [VoucherController::class, 'update']);
    Route::delete('delete-voucher/{id}', [VoucherController::class, 'destroy']);


    Route::get('/group', [GroupController::class, 'index'])->name('group.index');
    Route::get('/group/create', function () {
      return view('group.create');
      });
    Route::post('/group/store', [GroupController::class, 'store'])->name('group.store');
    Route::get('/group/show/{id}', [GroupController::class, 'show']);
    Route::get('/group/edit/{id}', [GroupController::class, 'edit']);
    Route::get('/group/editmember/{id}', [GroupController::class, 'editmember']);
    Route::post('update-group/{id}', [GroupController::class, 'update']);
    Route::delete('delete-group/{id}', [GroupController::class, 'destroy']);


    Route::get('/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

