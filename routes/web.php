<?php

use App\Http\Controllers\CategoryController;
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
    return view('index');
});

Route::get('/enquiryform', function () {
    return view('enquiryform');
});

Route::get('/user_enquiry', function () {
    return view('user_enquiry');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category');

// Route::get('sidebar', [YourController::class, 'sidebar']);


// Route::get('/sidebar', function () {
//     return view('sidebar');
// });
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'blog'])->name('blog');
Route::get('/create', [BlogController::class, 'create'])->name('create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
