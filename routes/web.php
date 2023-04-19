<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;

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

Route::get('/', function () {
    return view('home');
});


// register
Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'createUser']);
//login
Route::get('/login', [UserController::class, 'Login']);
Route::post('/login', [UserController::class, 'logUser']);

//logout
Route::post('/logout', [UserController::class, 'logout']);



Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

// Route::post('/products', [ShopController::class, 'showCategories']);


Route::get('/cart', [ShopController::class, 'cart'])->name('cart');

Route::post('/cart', [ShopController::class, 'addtocart']);
Route::post('/delete/{id}', [ShopController::class, 'delete'])->name('delete');