<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group 
| which contains the "web" middleware group. Now create something great!
*/

// ======================== Admin Routes ========================

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/adminProducts', [AdminController::class, 'products']);
Route::post('/AddNewProduct', [AdminController::class, 'AddNewProduct']);
Route::post('/UpdateProduct', [AdminController::class, 'UpdateProduct']);
Route::get('/deleteProduct/{id}', [AdminController::class, 'deleteProduct']);
Route::get('/adminProfile', [AdminController::class, 'profile']);
Route::get('/ourCustomers', [AdminController::class, 'customers']);
Route::get('/ourOrders', [AdminController::class, 'orders']);
Route::get('/changeUserStatus/{status}/{id}', [AdminController::class, 'changeUserStatus'])->name('changeUserStatus');
Route::get('/changeOrderStatus/{status}/{id}', [AdminController::class, 'changeOrderStatus'])->name('changeOrderStatus');


// ======================== Customer Routes ========================

// Pages
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/single/{id}', [MainController::class, 'singleProduct'])->name('singleProduct');

// Authentication
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::post('/loginUser', [MainController::class, 'loginUser'])->name('loginUser');
Route::post('/registerUser', [MainController::class, 'registerUser'])->name('registerUser');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');

// Cart
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::post('/addToCart', [MainController::class, 'addToCart'])->name('addToCart');
Route::post('/updateCart', [MainController::class, 'updateCart'])->name('updateCart');
Route::get('/deleteCartItem/{id}', [MainController::class, 'deleteCartItem'])->name('deleteCartItem');

// Checkout
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');

// User Profile
Route::get('/profile', [MainController::class, 'profile'])->name('profile');
Route::post('/updateUser', [MainController::class, 'updateUser'])->name('updateUser');
Route::get('/myOrders', [MainController::class, 'myOrders'])->name('myOrders');


// ======================== Stripe Payment Routes ========================

Route::get('/stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('/stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
