<?php

use App\Http\Livewire\Admin\AdminDashboardComponemt;
use App\Http\Livewire\Admin\ProductManagerComponent;
use App\Http\Livewire\Admin\UsersManagerComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponemt;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// For Users or Customers
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/user/dashboard', UserDashboardComponemt::class)->name('user.dashboard');
    Route::get('/user/profile/{id}', [\App\Http\Controllers\ProfileController::class, 'showProfileUser'])->name('user.profile');
    Route::post('/user/profile/{id}', [\App\Http\Controllers\ProfileController::class, 'update'])->name('user.profile.update');

    //Route Category
    Route::get('/user/Category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('user.Category.index');
    Route::post('/user/Category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('Category.store');
    Route::post('user/category', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

    //Route products
    Route::get('/user/product', [\App\Http\Controllers\Product\ProductController::class, 'index'])->name('user.product.index');
    Route::get('/user/product/create', [\App\Http\Controllers\Product\ProductController::class, 'create'])->name('user.product.create');
    Route::post('/user/product/create', [\App\Http\Controllers\Product\ProductController::class, 'store'])->name('product.store');
    Route::get('/user/product/update/{id}', [\App\Http\Controllers\Product\ProductController::class, 'show'])->name('user.product.update');
    Route::post('/user/product/update', [\App\Http\Controllers\Product\ProductController::class, 'update'])->name('product.update');
    Route::get('/user/product/delete/{id}', [\App\Http\Controllers\Product\ProductController::class, 'delete'])->name('product/delete');

    //Route orders
    Route::get('/user/order', [\App\Http\Controllers\Orders\OrderController::class, 'index'])->name('user.order.index');
    Route::get('/user/order/getOrder/{id}', [\App\Http\Controllers\Orders\OrderController::class, 'findById'])->name('user.order.findOrder');
});

// espace user service or shop

Route::get('/user/show/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.shop');
Route::get('/user/service/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.service');
Route::get('/user/client/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.client');


// For Administrators
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){

    Route::group(['prefix' =>'admin'], function (){

        Route::get('/dashboard', AdminDashboardComponemt::class)->name('admin.dashboard');

        Route::group(['prefix'=>'products'], function (){

            Route::get('/', ProductManagerComponent::class)->name('admin.products');

        });

        Route::group(['prefix'=>'users'], function (){

            Route::get('/', UsersManagerComponent::class)->name('admin.users');

        });


    });


});
