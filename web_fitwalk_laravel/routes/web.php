<?php

use App\Models\poster;
use App\Models\category;
use App\Http\Controllers\postController;
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

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
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




















































Route::get('/cart', function () {
    return view('cart', [
        'title' => 'cart',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/navia', function () {
    return view('navia', [
        'title' => 'ilovenavia',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});

Route::get('/wishes', function () {
    return view('wishes', [
        'title' => 'wishes',
        'name' => 'welt yang',
        'email' => 'antoluishendry@gmail.com',
        'image' => 'img/jojo.jpg'
    ]);
});