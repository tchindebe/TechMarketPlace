<?php

namespace App\Providers;

use App\Http\Livewire\Admin\ProductManagerComponent;
use App\Models\Ordereds;
use App\Repository\AdapterEloquent\EloquentProfileUserAdaptor;
use App\Repository\Category\AdaptorEloquentCategory\AdaptorEloquentCategory;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Orders\AdaptorOrderEloquent\EloquentOrder;
use App\Repository\Orders\OrderRepositoryInterface;
use App\Repository\Product\AdaptorEloquentProduct\ProductEloquent;
use App\Repository\Product\ProductRepositoryInterface;
use App\Repository\UserRepositoryInterface;
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
        );$this->app->bind(
            ProductRepositoryInterface::class,
            ProductEloquent::class
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
    }
}
