<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/cart',[HomeController::class,'cart']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect',[HomeController::class,'redirect']);

Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/category',[AdminController::class,'view_category']);
Route::get('/delete_category/{id}',[AdminController::class, 'delete_category']);

 Route::get('/allproducts',[ProductController::class, 'index']);
 Route::post('/add_product',[AdminController::class, 'store']);
 Route::get('/products_create',[AdminController::class, 'create']);
 Route::post('/products_delete/{id}',[AdminController::class, 'destroy']);
 Route::get('/show-product/{id}',[AdminController::class, 'show']);
 Route::get('/edit-product/{id}',[AdminController::class, 'edit']);
 Route::post('/update-product/{id}',[AdminController::class, 'update']);

 Route::get('/product_detail/{id}',[HomeController::class, 'product_detail']);
 Route::post('/add_cart/{id}',[HomeController::class, 'add_cart']);
// Route::resource('/admin/products', ProductController::class);
// Route::resource('/admin/products', ProductController::class);
// Route::get('/admin/products/allproducts','ProductController@index');
// Route::get('/admin/products/allproducts',[AdminController::class,'index']);