@extends('layouts.base')

@section('content')
    <div class="woocommerce-active">
        <div class="hfeed site" id="page">
            <div id="content" class="site-content" tabindex="-1">
                <div id="content" class="site-content" tabindex="-1">
                    <div class="col-full">
                        <div class="row">
                            <nav class="woocommerce-breadcrumb">
                                <a href="/">Home</a>
                                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Stores
                            </nav>
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main">
                                    <div class="shop-control-bar">
                                        <div class="handheld-sidebar-toggle">
                                            <button type="button" class="btn sidebar-toggler">
                                                <i class="fa fa-sliders"></i>
                                                <span>Filters</span>
                                            </button>
                                        </div>
                                        <h1 class="woocommerce-products-header__title page-title">Store</h1>
                                        <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                                    <i class="tm tm-grid-small"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                                    <i class="tm tm-grid"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <nav class="techmarket-advanced-pagination">
                                            <form class="form-adv-pagination" method="post">
                                                <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                            </form> of 5<a href="#" class="next page-numbers">→</a>
                                        </nav>
                                    </div>
                                    <div class="tab-content">
                                        <div id="grid" class="tab-pane active" role="tabpanel">
                                            <div class="woocommerce columns-5">
                                                <div class="products">
                                                    @foreach($users as $items)
                                                        <div class="product first">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('user.shop', $items->username)}}">
                                                                <a href="{{route('user.shop', $items->username)}}">
                                                                    @if($items->profile->logo)
                                                                        <img width="150" height="150" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('storage') . '/' . $items->profile->logo}}" alt="user-img" class="img-circle">
                                                                    @endif
                                                                    @if($items->profile->logo == null)
                                                                        <img width="150" height="150" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                                                    @endif
                                                                    <span>{{$items->username}}
                                                                        @if(Cache::has('user-is-online-' . $items->id))
                                                                            <span style="font-size: 10px;" class="text-success">Online {{ \Carbon\Carbon::parse($items->last_seen)->diffForHumans()}}</span>
                                                                        @else
                                                                            <span class="text-danger" style="font-size: 10px;">Offline {{ \Carbon\Carbon::parse($items->last_seen)->diffForHumans()}}</span>
                                                                        @endif
                                                                    </span>
                                                                </a>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$items->username}}</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!
                                        <div id="grid-extended" class="tab-pane" role="tabpanel">
                                            <div class="woocommerce columns-5">
                                                <div class="products">
                                                    @foreach($users as $item)

                                                        <div class="product first">
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('user.shop', $item->username)}}">
                                                                @if($item->profile->logo)
                                                                    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('storage') . '/' . $item->profile->logo}}" alt="user-img" class="img-circle">
                                                                @endif
                                                                @if($item->profile->logo == null)
                                                                    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                                                @endif
                                                                <span>{{$item->username}}
                                                                    @if(Cache::has('user-is-online-' . $item->id))
                                                                        <span style="font-size: 10px;" class="text-success">Online</span>
                                                                    @else
                                                                        <span class="text-danger" style="font-size: 10px;">Offline</span>
                                                                    @endif
                                                                </span>
                                                                <span class="price">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$item->username}} </span>
                                                                </span>
                                                            </a>

                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </main>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
