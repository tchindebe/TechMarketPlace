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

// Route::get('/', function () {
//     return view('welcome');
// });

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

            //Route for products admin
            Route::get('/', ProductManagerComponent::class)->name('admin.products');
            Route::get('/add', ProductManagerComponent::class)->name('product.add');

            //Route for category admin products
            Route::group(['prefix' => 'category'], function (){
                Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store.category');
                Route::post('/remove', [\App\Http\Controllers\Admin\CategoryController::class, 'remove'])->name('remove.category');
                Route::post('/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update.category');
            });

        });

        Route::group(['prefix'=>'store'], function (){

            //Route for products admin
            Route::get('/', \App\Http\Livewire\Admin\StoreComponent::class)->name('admin.store');
            Route::get('/add', ProductManagerComponent::class)->name('product.add');
        });



        Route::group(['prefix'=>'users'], function (){

            Route::get('/', UsersManagerComponent::class)->name('admin.users');

        });


    });


});
