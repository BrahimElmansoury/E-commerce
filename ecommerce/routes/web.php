<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Admin;

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


Route::get('/order', [AdminController::class, 'order'])->name('admin.order');
Route::get('/admin', [AdminController::class, 'indexAdmin'])->name('admin.indexAdmin');
Route::get('/product', [AdminController::class, 'product'])->name('admin.product');
Route::get('/stock', [AdminController::class, 'stock'])->name('admin.stock');
Route::get('/category', [AdminController::class, 'category'])->name('admin.category');



//create a new product
Route::post('/product', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');



Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products/store',[AdminController::class,'storeProduct'])->name('products.storeProduct');

Route::get('/category', [AdminController::class, 'category'])->name('admin.category');
//Route::post('/category', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
Route::post('/category', [AdminController::class, 'storeCategory'])->name('category.store');

Route::post('/admin/add-stock', [AdminController::class, 'addStock'])->name('admin.addStock');
Route::post('/admin/addStock', [AdminController::class, 'addStock'])->name('admin.addStock');



// Route::get('/admin/product/{product}/edit', [AdminController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');



Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');



Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');


Route::delete('/admin/category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

