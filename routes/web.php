<?php

use App\Http\Livewire\Admin\AdminDashboardComponemt;
use App\Http\Livewire\Admin\ProductManagerComponent;
use App\Http\Livewire\Admin\UsersManagerComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponemt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Services\MediaPostController;
use App\Http\Livewire\Admin\PaymentManagerComponent;
use App\Http\Livewire\Admin\MessengerManagerComponent;

Route::get('/', HomeComponent::class);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/services', [\App\Http\Controllers\Services\ServicesController::class, 'index'])->name('services-home');
Route::get('store/all', [\App\Http\Controllers\Stores\StoreController::class, 'index'])->name('store.all');


//Comment routes
Route::post('/service/comment/create', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');


Route::get('/shop', ShopComponent::class);

Route::get('/login_or_register', function (){
    if (auth()->user()){
        return redirect('/');
    }
    return view('auth.login_or_register');
});

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
    Route::get('/shop/Category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('user.Category.index');
    Route::post('/shop/Category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('Category.store');
    Route::post('shop/category', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

    //Route products
    Route::get('/shop/product', [\App\Http\Controllers\Product\ProductController::class, 'index'])->name('user.product.index');
    Route::get('/shop/product/create', [\App\Http\Controllers\Product\ProductController::class, 'create'])->name('user.product.create');
    Route::post('/shop/product/create', [\App\Http\Controllers\Product\ProductController::class, 'store'])->name('product.store');
    Route::get('/shop/product/update/{id}', [\App\Http\Controllers\Product\ProductController::class, 'show'])->name('user.product.update');
    Route::post('/shop/product/update', [\App\Http\Controllers\Product\ProductController::class, 'update'])->name('product.update');
    Route::get('/shop/product/delete/{id}', [\App\Http\Controllers\Product\ProductController::class, 'delete'])->name('product/delete');

    //Route Messenger in shop
    Route::get('/shop/messenger', [\App\Http\Controllers\Chat\shop\MessengerController::class, 'index'])->name('shop.messenger.index');
    Route::get('/shop/messenger/{username}', [\App\Http\Controllers\Chat\shop\MessengerController::class, 'getByUsername'])->name('shop.messenger.chat');
    Route::post('/shop/messenger/send/{id}', [\App\Http\Controllers\Chat\shop\MessengerController::class, 'sendMessage'])->name('shop.messenger.send');

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
    Route::post('/service/user/password_change', [\App\Http\Controllers\Services\ServicesController::class, 'user_password_change'])->name('service.profile.password_change');
    Route::post('/service/post/storeProject', [\App\Http\Controllers\Services\ServicePostController::class, 'storeProject'])->name('service.post.storeProject');
    Route::post('/service/post/storeJob', [\App\Http\Controllers\Services\ServicePostController::class, 'storeJob'])->name('service.post.storeJob');
    Route::get('/service/user/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.service');

    Route::post('/services/profile/image-profile', [\App\Http\Controllers\Services\ServicesController::class, 'profile_image_change'])->name('services.profile.profile-image');
    Route::post('/services/profile/cover-profile', [\App\Http\Controllers\Services\ServicesController::class, 'cover_image_change'])->name('services.profile.cover-image');

    Route::get('/services/media_video', [MediaPostController::class, 'create'])->name('user.service.media.add');
    Route::post('/service/media-video', [MediaPostController::class, 'store'])->name('service.media.add');
    Route::get('/service/all/video', [MediaPostController::class, 'index'])->name('media.all');


    ///////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////// payment strip ////////////////////////////////////////////////
    /// //////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/payment/{id}', [\App\Http\Controllers\Payments\PaymentController::class, 'index'])->name('payment.index');
    Route::post('/service/video', [\App\Http\Controllers\Payments\PaymentController::class, 'store'])->name('payment.store');

    //sponsored product/////

    Route::get('/store/product/sponsored/{id}', [\App\Http\Controllers\Payments\PaymentSponsoredProductController::class, 'index'])->name('product.sponsored.store');
    Route::post('/store/sponsored/payment', [\App\Http\Controllers\Payments\PaymentSponsoredProductController::class, 'store'])->name('payment.sponsored.store');

    Route::get('/store/payment', [\App\Http\Controllers\Payments\PaymentShopController::class, "index"])->name('payment.shop.spending');
    Route::post('/store/payment', [\App\Http\Controllers\Payments\PaymentShopController::class, 'store'])->name('payment.store.spending.validate');

});

// Route shop
Route::get('/user/show/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.shop');
Route::get('/user/shop/product/{id}', [\App\Http\Controllers\shop\ProductController::class, 'index'])->name('user.shop.product.detailProduct');
Route::get('/user/shop/product{id}/', [\App\Http\Controllers\shop\ProductController::class, 'show'])->name('user.shop.product.productCategory');

//link header
Route::get('/allProduct', [\App\Http\Controllers\Product\ProductController::class, 'allProduct'])->name("allProduct");



//Route client
Route::get('/user/client/{user}', [\App\Http\Controllers\SeedShopOrServiceController::class, 'show'])->name('user.client');


// For Administrators
Route::middleware(['auth:sanctum', 'verified', 'auth'])->group(function(){
    Route::group(['prefix' =>'admin'], function (){
        Route::get('/dashboard', AdminDashboardComponemt::class)->name('admin.dashboard');
        Route::group(['prefix'=>'products'], function (){
            Route::get('/', ProductManagerComponent::class)->name('admin.products');
            Route::get('/product/sponsored/{id}', [ProductManagerComponent::class, 'sponsored'])->name('product.sponsored');
            Route::get('/of sponsored/{id}', [ProductManagerComponent::class, 'ofsponsored'])->name('product.ofsponsored');
            Route::get('/product/detele/{id}', [ProductManagerComponent::class, 'delete'])->name('product.delete');
        });
        Route::group(['prefix'=>'users'], function (){
            Route::get('/shops', [UsersManagerComponent::class, 'shop'])->name('admin.users.shop');
            Route::get('/customers', [UsersManagerComponent::class, 'customer'])->name('admin.users.customer');
            Route::get('/services', [UsersManagerComponent::class, 'service'])->name('admin.users.service');
            Route::get('/user/{id}/{status}', [UsersManagerComponent::class, 'update_status'])->name('status.update');
        });
        Route::group(['prefix' => 'payment'], function (){
            Route::get('/sponsored/product', [PaymentManagerComponent::class, 'sponsored'])->name('admin.payment.sponsored');
            Route::get('/shop', [PaymentManagerComponent::class, 'shop'])->name('admin.payment.shop');
            Route::get('/service_account', [PaymentManagerComponent::class, 'service_Account'])->name('admin.payment.media');
        });
        Route::group(['prefix' => 'messenger'], function (){
            Route::get('/messenger', [MessengerManagerComponent::class, 'index'])->name('admin.messenger.all');
            Route::get('/messenger/{username}', [MessengerManagerComponent::class, 'getById'])->name('admin.messenger.getBy.User');
            Route::post('/messenger/{id}', [MessengerManagerComponent::class, 'sendMessage'])->name('admin.messenger.send');
        });
        Route::get('/changeStatus', [UsersManagerComponent::class, 'update_status'])->name('admin.user.update_status');

    });
});
