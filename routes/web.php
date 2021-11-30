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

});


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
