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
















































Route::get('/cart', function () {
    return view('cart', [
        'title' => 'cart',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/wishlist', function () {
    return view('wishlist', [
        'title' => 'ilovenavia',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/setting', function () {
    return view('setting', [
        'title' => 'wishes',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'wishes',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/notification', function () {
    return view('notification', [
        'title' => 'wishes',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});