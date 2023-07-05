<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ProductController::class, 'index'])->name('accueil') ;
Route::get('/category/{id}', [ProductController::class, 'index'])->name('category') ;
Route::get('/detail/{product}', [ProductController::class, 'detail'])->name('detail') ;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/delete-one/{cart}', [CartController::class, 'deleteOne'])->name('cart-delete-one');
    Route::get('/cart/delete', [CartController::class, 'delete'])->name('cart-delete');
    Route::get('/cart/update/{cart}/{quantity}', [CartController::class, 'update'])->name('cart-update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
