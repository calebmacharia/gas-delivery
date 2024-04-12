<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CookerController;
 use App\Http\Controllers\ordercookerscontroller;

use \App\Http\Middleware\roleMiddleware;
use App\Http\Controllers\CartController;
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


Route::get('/home',fn()=> to_route('home'));
Route::resource('home',homeController::class)
->only(['index']);


Route::get('/order', [OrderController::class, 'index'])->name('order');


Route::post("/uploadgas",[AdminController::class,"upload"])->name('upload');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get("/deletegas/{id}", [AdminController::class,"deletegas"]);

Route::get("/editgas/{id}", [AdminController::class,"editgas"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', fn() => redirect()->route('admin.index'));
Route::resource('admin', adminController::class)->only(['index'])->middleware('auth','role:admin');

Route::post("/update/{id}", [AdminController::class,"update"]);


// new route to view products
Route::get('/admin/view', [AdminController::class, 'index'])->name('admin.view');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
//billing route
 //Route::get('/billing', [BillingController::class, 'importUsersToBilling']);
//Route::get('billing',[BillingController::class,'billing'])->name('view.billing');

 Route::get('/billing', function () {
     return view('billing');
 });
 Route::post('/billing',[BillingController::class,'submitform'])->name('billing.submit');

 //users routes

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');

//cookers route


Route::get('/cookers', [CookerController::class, 'index'])->name('cookers.index');
Route::get('/cookers/create', [CookerController::class, 'create'])->name('cookers.create');
Route::post('/cookers', [CookerController::class, 'store'])->name('cookers.store');
Route::get('/cookers/{cooker}/edit', [CookerController::class, 'edit'])->name('cookers.edit');
Route::put('/cookers/{cooker}', [CookerController::class, 'update'])->name('cookers.update');
Route::delete('/cookers/{cooker}/delete',[CookerController::class,'destroy'])->name('cookers.destroy');

//ordercookers route

Route::get('/ordercookers', [ordercookerscontroller::class, 'index'])->name('cookers.ordercookers');












Route::get('cart', [OrderController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [OrderController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [OrderController::class, 'remove'])->name('remove_from_cart');

require __DIR__.'/auth.php';
