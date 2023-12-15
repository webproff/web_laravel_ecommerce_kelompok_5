<?php

use App\Models\User;
use App\Models\poster;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\cartController;

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

// Route::get('/', function () {
//     return redirect('home');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/', [postController::class, 'indexs']);
Route::get('/archon', [postController::class, 'index']);
route::get('archon/{poster:slug}', [postController::class, 'show']);

route::get('categories', function() {
    return view('categories', [
        'title' => 'post categories',
        'categories' => category::all()
    ]);
});

route::get('category/{category:slug}', function(category $category) {
    return view('category', [
        'title' => $category->name,
        'poster' => $category->poster,
        'category' => $category->name
    ]);
});

route::get('User/{User:username}', function(User $User) {
    return view('User', [
        'title' => 'user post',
        'poster' => $User->poster,
        'User' => $User->name,
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

// cart
Route::get('cart/', [postController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('add-to-cart/{id}', [postController::class, 'addToCart'])->name('add_to_cart')->middleware('auth');
Route::patch('update-cart', [postController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart/{id}', [postController::class, 'remove'])->name('remove_from_cart');

// wishlist 
Route::get('/wishlist', [postController::class, 'indexw'])->name('wishlist')->middleware('auth');
Route::get('wish-list/{id}', [postController::class, 'addToWish'])->name('add_to_Wish')->middleware('auth');
Route::patch('update-cart', [postController::class, 'update'])->name('update_cart');
Route::delete('remove-from-wishlist/{id}', [postController::class, 'removewish'])->name('remove_from_wish');















































Route::get('/cart', function () {
    return view('cart', [
        'title' => 'cart',
    ]);
});

Route::get('/wishlist', function () {
    return view('wishlist', [
        'title' => 'wishlist',
    ]);
});

Route::get('/setting', function () {
    return view('setting', [
        'title' => 'wishes',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'wishes',
    ]);
});

Route::get('/notification', function () {
    return view('notification', [
        'title' => 'wishes',
    ]);
});