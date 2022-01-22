<?php

namespace App\Providers;

use App\Http\Livewire\Admin\ProductManagerComponent;
use App\Models\Ordereds;
use App\Repository\AdapterEloquent\EloquentProfileUserAdaptor;
use App\Repository\Admin\Orders\EloquentOrdersAdaptor;
use App\Repository\Admin\Orders\OrderInterfaceRepository;
use App\Repository\Category\AdaptorEloquentCategory\AdaptorEloquentCategory;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Orders\AdaptorOrderEloquent\EloquentOrder;
use App\Repository\Orders\OrderRepositoryInterface;
use App\Repository\Product\AdaptorEloquentProduct\ProductEloquent;
use App\Repository\Product\ProductRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            EloquentProfileUserAdaptor::class
        );
        $this->app->bind(
            OrderRepositoryInterface::class,
            EloquentOrder::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            AdaptorEloquentCategory::class
        );
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductEloquent::class
        );
        $this->app->bind(
            OrderInterfaceRepository::class,
            EloquentOrdersAdaptor::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $orders = Ordereds::all();
        view()->share('orders', $orders);

        $cartCount = Cart::getTotalQuantity();
        view()->share('cartCount', $cartCount);

        $cartTotal = Cart::getTotal();
        view()->share('cartTotal', $cartTotal);

//        View::composer(['layouts.guest', 'product-component'], function ($view) {
//            $view->with([
//                'cartCount' => Cart::getTotalQuantity(),
//                'cartTotal' => Cart::getTotal(),
//            ]);
//        });

        View::composer('layouts.guest', function ($view) {
            $view->with([
                'cartCount' => Cart::getContent()->count(),
                'cartTotal' => Cart::getTotal(),
                'content' => Cart::getContent(),
            ]);
        });

    }
}
