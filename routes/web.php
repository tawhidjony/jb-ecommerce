<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\CartController as FrontendCartController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\Frontend\AuthController as FrontendAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontendHomeController::class, 'index'])->name('home.index');
Route::get('/product-details/{uuid}', [FrontendHomeController::class, 'show'])->name('home.show');
Route::get('/category-product/{uuid}', [CategoryController::class, 'getCategoryProduct'])->name('category.product');


// ADD TO CART
Route::get('cart', [FrontendCartController::class, 'cartIndex'])->name('cart.index');
Route::post('add-to-cart', [FrontendCartController::class, 'addItemToCart'])->name('cart.store');
Route::put('/cart/update', [FrontendCartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/cart/destroy/{rowId}', [FrontendCartController::class, 'cartDestroy'])->name('cart.destroy');

// Login & Register
Route::get('/customer/login', [FrontendAuthController::class, 'login'])->name('customer.login');
Route::get('/customer/register', [FrontendAuthController::class, 'register'])->name('customer.register');

Auth::routes();
Route::get('/personal-details-user-account', [FrontendCustomerController::class, 'index'])->name('customer.index');
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function() {
    Route::group(['middleware' => ['check_permission']], function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('/category', CategoryController::class);
        Route::resource('/slider', SliderController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/users', UserController::class);
        Route::resource('/roles', RoleController::class);
    });
});
