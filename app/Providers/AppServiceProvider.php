<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Comments;
use App\Models\Ordereds;
use App\Models\Post;
use App\Repository\AdapterEloquent\EloquentProfileUserAdaptor;
use App\Repository\Admin\Orders\EloquentOrdersAdaptor;
use App\Repository\Admin\Orders\OrderInterfaceRepository;
use App\Repository\Category\AdaptorEloquentCategory\AdaptorEloquentCategory;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Chat\Customers\AdaptorEloquentChat;
use App\Repository\Chat\Customers\ChatRepositoryInterface;
use App\Repository\MediaService\MediaServiceEloquent;
use App\Repository\MediaService\MediaServiceInterface;
use App\Repository\Orders\AdaptorOrderEloquent\EloquentOrder;
use App\Repository\Orders\OrderRepositoryInterface;
use App\Repository\Payment\PaymentStripeInterface;
use App\Repository\Payment\SponsoredProduct\paymentSponsoredProductInterface;
use App\Repository\Payment\SponsoredProduct\StripeEloquentSponsoredProduct;
use App\Repository\Payment\StripeEloquent;
use App\Repository\Product\AdaptorEloquentProduct\ProductEloquent;
use App\Repository\Product\ProductRepositoryInterface;
use App\Repository\ProfileCustomers\AdaptorEloquentRequest\ProfilEloquent;
use App\Repository\ProfileCustomers\ProfilRepositoryInterface;
use App\Repository\UserRepository\AdaptorEloquentRepository\UserEloquent;
use App\Repository\UserRepository\UserInterfaceRepository;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use function GuzzleHttp\Promise\all;

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
        $this->app->bind(
            ProfilRepositoryInterface::class,
            ProfilEloquent::class
        );
        $this->app->bind(
            ChatRepositoryInterface::class,
            AdaptorEloquentChat::class
        );
        $this->app->bind(
            UserInterfaceRepository::class,
            UserEloquent::class
        );
        $this->app->bind(
            MediaServiceInterface::class,
            MediaServiceEloquent::class
        );
        $this->app->bind(
            PaymentStripeInterface::class,
            StripeEloquent::class
        );
        $this->app->bind(
            paymentSponsoredProductInterface::class,
            StripeEloquentSponsoredProduct::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $categories = Category::all();
        $allCategories = Category::all();
        $allPost = Post::with('user')->get();
        $orders = Ordereds::all();
        $allPostComment = Comments::all();

        $lastOrderCustomers = Ordereds::where('user_id', 3)
            ->where('status', 0)
            ->latest()
            ->first();

        view()->share('categories', $categories);
        view()->share('allPost', $allPost);
        view()->share('allCategories', $allCategories);
        view()->share('allPostComment', $allPostComment);
    }
}
