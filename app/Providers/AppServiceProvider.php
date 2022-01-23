<?php

namespace App\Providers;

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
use Illuminate\Support\ServiceProvider;
use Cart;

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

    }
}
