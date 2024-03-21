<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdminProfileController;
use \App\Http\Middleware\roleMiddleware;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::any('/admin/dashboard',[AdminController::class,'dashboard'])
// ->middleware('auth')
->name('admin.dashboard');

Route::get('/admin/welcome', function () {
    return view('admin.welcome');
});


Route::get('/home',fn()=> to_route('home'));
Route::resource('home',homeController::class)
->only(['index']);

Route::get('/order',fn()=> to_route('order'));
Route::resource('order',orderController::class)
->only(['index']);

Route::post("/uploadgas",[AdminController::class,"upload"]);


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get("/deletegas/{id}", [AdminController::class,"deletegas"]);

Route::get("/editgas/{id}", [AdminController::class,"editgas"]);


Route::get('/admin/index',[AdminProfileController::class,'index'])->name('admin.profile.index');
Route::post('/admin/update',[AdminProfileController::class,'updateprofile'])->name('admin.profile.update');

Route::put('profile/password',[AdminProfileController::class,'updatepassword'])->name('profile.password.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/profile/order',[ProductController::class,'order'])->name('admin.order');


Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');




Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');


    Route::get('/admin/orders', [OrderController::class,'index'])->name('admin.orders.index');
    Route::get('/admin/orders/create', [OrderController::class,'create'])->name('admin.orders.create');
    Route::post('/admin/orders/store', [OrderController::class,'store'])->name('admin.orders.store');
    Route::get('/admin/orders/{order}/edit', [OrderController::class,'edit'])->name('admin.orders.edit');
    Route::put('/admin/orders/{order}', [OrderController::class,'update'])->name('admin.orders.update');
    Route::delete('/admin/orders/{order}', [OrderController::class,'destroy'])->name('admin.orders.destroy');

});

Route::get('/admin', fn() => redirect()->route('admin.index'));
Route::resource('admin', adminController::class)->only(['index'])->middleware('auth','role:admin');

Route::post("/update/{id}", [AdminController::class,"update"]);

require __DIR__.'/auth.php';
