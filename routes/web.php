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

Route::get('/login_or_register', function (){
    if (auth()->user()){
        return redirect('/');
    }
    return view('auth.login_or_register');
});

//Route::resource('/cart', \App\Http\Controllers\CartController::class, ['index', 'store', 'update']);
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::get('/cart/{id}/update', [\App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::get('/cart/{id}/destroy', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.remove');

Route::get('/checkout', CheckoutComponent::class);


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

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////   Routes customers  /////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Route profile
    Route::get('user/customers/{id}', [\App\Http\Controllers\ProfileCustomers\ProfileController::class, 'showProfileUser'])->name('user.customers.profile');
    Route::post('/user/customers/{id}', [\App\Http\Controllers\ProfileCustomers\ProfileController::class, 'update'])->name('user.customers.update');

    //Route orders
    Route::get('/user/order', [\App\Http\Controllers\Orders\OrderController::class, 'index'])->name('user.order.index');
    Route::get('/user/order/getOrder/{id}', [\App\Http\Controllers\Orders\OrderController::class, 'findById'])->name('user.order.findOrder');
    Route::get('/user/order/allOrders', [\App\Http\Controllers\Orders\OrderController::class, 'allOrder'])->name('user.order.all');
    Route::get('/user/order/orderProgress', [\App\Http\Controllers\Orders\OrderController::class, 'orderByProgress'])->name('user.order.index');
    Route::get('/user/order/unpaid', [\App\Http\Controllers\Orders\OrderController::class, 'orderByUnpaid'])->name('user.order.unpaid');

    //route checkout
    Route::get('livewire/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name("livewire.checkout");
    Route::post('livewire/checkout', [\App\Http\Controllers\CheckoutController::class, 'store'])->name('livewire.store');

    //route tank you for place order
    Route::get('livewire/tankYou', [\App\Http\Controllers\CheckoutController::class, 'thank'])->name('livewire.thankyou');

    //routes orders custumer
    Route::get('livewire/orders/{bill}/{subtotal}', [UserDashboardComponemt::class, 'showByBill'])->name('livewire.bill');
    Route::get('livewire/orders/{billNumber}', [UserDashboardComponemt::class, 'validateOrderCustomer'])->name('livewire.validateOrdersCustumer');

    //Routes chat customers shop
    Route::get('client/chat/customer/{id}', [\App\Http\Controllers\Chat\Customer_shop\ChatController::class, 'index'])->name('client.chat.customers.index');
    Route::get('client/chat/customers/{id}', [\App\Http\Controllers\Chat\Customer_shop\ChatController::class, 'create'])->name('client.chat.customers.create');
    Route::post('client/chat/customers/{id}', [\App\Http\Controllers\Chat\Customer_shop\ChatController::class, 'store'])->name('client.chat.customers.store');

    //Route service
    Route::get('/service/profile', [\App\Http\Controllers\Services\ServicesController::class, 'profile'])->name('service-setting');
    Route::get('/service/user', [\App\Http\Controllers\Services\ServicesController::class, 'user_profile'])->name('service-profile');

});

// Route shop
Route::get('/user/show/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.shop');
Route::get('/user/shop/product/{id}', [\App\Http\Controllers\shop\ProductController::class, 'index'])->name('user.shop.product.detailProduct');
Route::get('/user/shop/product{id}/', [\App\Http\Controllers\shop\ProductController::class, 'show'])->name('user.shop.product.productCategory');

//Route service
Route::get('/user/service/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.service');
Route::get('/user/services', [\App\Http\Controllers\Services\ServicesController::class, 'index'])->name('services-home');


//Route client
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
