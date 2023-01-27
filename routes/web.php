<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/supplier-profile', function () {
    return view('supplier-profile');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog/index', function () {
    return view('blog');
});
Route::get('/supplier/register', function () {
    return view('supplier.register');
});
Route::get('/contact-us', function () {
    return view('footer.contact-us');
});
Route::get('/blog/post', function () {
    return view('blog.post');
});
Route::get('/blog/post/create', function () {
    return view('blog.create');
});
Route::get('/category', function () {
    return view('category.category');
});
Route::get('/supplier/view-as', function () {
    return view('supplier.supplier-profile-NV');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
