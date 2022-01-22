@extends('layouts.guest')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>
                    Cart
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="cart-wrapper">

                                        <form method="post" action="#" class="woocommerce-cart-form">
                                            @if($total)
                                                <table class="shop_table shop_table_responsive cart">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-remove">&nbsp;</th>
                                                        <th class="product-thumbnail">&nbsp;</th>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($content as $item)
                                                        <tr>
                                                            <td class="product-remove">
                                                                <a class="remove" href="#">×</a>
                                                            </td>
                                                            <td class="product-thumbnail">
                                                                <a href="single-product-fullwidth.html">
                                                                    <img width="180" height="180" alt="" class="wp-post-image" src="single-product-fullwidth.html">
                                                                </a>
                                                            </td>
                                                            <td data-title="Product" class="product-name">
                                                                <div class="media cart-item-product-detail">
                                                                    <a href="single-product-fullwidth.html">
                                                                        <img width="180" height="180" alt="" class="wp-post-image" src="assets/images/products/cart-1.jpg">
                                                                    </a>
                                                                    <div class="media-body align-self-center">
                                                                        <a href="single-product-fullwidth.html">{{ $item->name }}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-title="Price" class="product-price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    {{ $item->price }} <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                                </span>
                                                            </td>
                                                            <td class="product-quantity" data-title="Quantity">
                                                                <div class="quantity">
                                                                    <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <label for="quantity">Quantity</label>
                                                                        <input id="quantity" min="1" type="number" name="quantity" value="{{ $item->quantity }}" title="Qty" class="input-text qty text" size="4">
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td data-title="Total" class="product-subtotal">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        {{ number_format($item->quantity * $item->price) }} <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                                    </span>
{{--                                                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">--}}
{{--                                                                    @csrf--}}
{{--                                                                    @method('DELETE')--}}

{{--                                                                </form>--}}
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            @else
                                                <p class="alert alert-warning">Your shopping cart is empty.</p>
                                        @endif
                                        <div id="loader" class="hide">
                                            <div class="loader"></div>
                                        </div>
                                        <!-- .shop_table shop_table_responsive -->
                                        </form>
                                        <!-- .woocommerce-cart-form -->
                                        <div class="cart-collaterals">
                                            <div class="cart_totals">
                                                <h2>Cart totals</h2>
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                {{ Cart::getSubTotal() }}
                                                                <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td data-title="Shipping">Flat rate</td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total">
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    {{ Cart::getSubTotal() }}
                                                                    <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- .shop_table shop_table_responsive -->
                                                <div class="wc-proceed-to-checkout">
                                                    <form class="woocommerce-shipping-calculator" method="post" action="#">
                                                        <p>
                                                            <a class="shipping-calculator-button" data-toggle="collapse" href="#shipping-form" aria-expanded="false" aria-controls="shipping-form">Calculate shipping</a>
                                                        </p>
                                                        <div class="collapse" id="shipping-form">
                                                            <div class="shipping-calculator-form">
                                                                <p id="calc_shipping_country_field" class="form-row form-row-wide">
                                                                    <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                                                        <option value="">Select a country…</option>
                                                                        <option value="AX">Åland Islands</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AQ">Antarctica</option>
                                                                        <option value="AG">Antigua and Barbuda</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AU">Australia</option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                    </select>
                                                                </p>
                                                                <p id="calc_shipping_state_field" class="form-row form-row-wide validate-required">
                                                                    <span>
                                                                        <select id="calc_shipping_state" name="calc_shipping_state">
                                                                            <option value="">Select an option…</option>
                                                                            <option value="AP">Andhra Pradesh</option>
                                                                            <option value="AR">Arunachal Pradesh</option>
                                                                            <option value="AS">Assam</option>
                                                                            <option value="BR">Bihar</option>
                                                                            <option value="CT">Chhattisgarh</option>
                                                                            <option value="GA">Goa</option>
                                                                            <option value="GJ">Gujarat</option>
                                                                            <option value="HR">Haryana</option>
                                                                            <option value="HP">Himachal Pradesh</option>
                                                                            <option value="JK">Jammu and Kashmir</option>
                                                                            <option value="JH">Jharkhand</option>
                                                                            <option value="KA">Karnataka</option>
                                                                            <option value="KL">Kerala</option>
                                                                            <option value="MP">Madhya Pradesh</option>
                                                                            <option value="MH">Maharashtra</option>
                                                                            <option value="MN">Manipur</option>
                                                                            <option value="ML">Meghalaya</option>
                                                                            <option value="MZ">Mizoram</option>
                                                                            <option value="NL">Nagaland</option>
                                                                            <option value="OR">Orissa</option>
                                                                            <option value="PB">Punjab</option>
                                                                            <option value="RJ">Rajasthan</option>
                                                                            <option value="SK">Sikkim</option>
                                                                            <option value="TN">Tamil Nadu</option>
                                                                            <option value="TS">Telangana</option>
                                                                            <option value="TR">Tripura</option>
                                                                            <option value="UK">Uttarakhand</option>
                                                                            <option value="UP">Uttar Pradesh</option>
                                                                            <option value="WB">West Bengal</option>
                                                                            <option value="AN">Andaman and Nicobar Islands</option>
                                                                            <option value="CH">Chandigarh</option>
                                                                            <option value="DN">Dadra and Nagar Haveli</option>
                                                                            <option value="DD">Daman and Diu</option>
                                                                            <option value="DL">Delhi</option>
                                                                            <option value="LD">Lakshadeep</option>
                                                                            <option value="PY">Pondicherry (Puducherry)</option>
                                                                        </select>
                                                                    </span>
                                                                </p>
                                                                <p id="calc_shipping_postcode_field" class="form-row form-row-wide validate-required">
                                                                    <input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / ZIP" value="" class="input-text">
                                                                </p>
                                                                <p>
                                                                    <button class="button" value="1" name="calc_shipping" type="submit">Update totals</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- .wc-proceed-to-checkout -->
                                                    <a class="checkout-button button alt wc-forward" href="checkout.html">
                                                        Proceed to checkout</a>
                                                    <a class="back-to-shopping" href="shop.html">Back to Shopping</a>
                                                </div>
                                                <!-- .wc-proceed-to-checkout -->
                                            </div>
                                            <!-- .cart_totals -->
                                        </div>
                                        <!-- .cart-collaterals -->
                                    </div>
                                    <!-- .cart-wrapper -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
@endsection

@section('javascript')
    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const quantities = document.querySelectorAll('input[name="quantity"]');
            quantities.forEach( input => {
                input.addEventListener('input', e => {
                    if(e.target.value < 1) {
                        e.target.value = 1;
                    } else {
                        e.target.parentNode.parentNode.submit();
                        document.querySelector('#cart-wrapper').classList.add('hide');
                        document.querySelector('#action').classList.add('hide');
                        document.querySelector('#loader').classList.remove('hide');
                    }
                });
            });

            const deletes = document.querySelectorAll('.deleteItem');
            deletes.forEach( icon => {
                icon.addEventListener('click', e => {
                    e.target.parentNode.parentNode.submit();
                    document.querySelector('#wrapper').classList.add('hide');
                    document.querySelector('#loader').classList.remove('hide');
                });
            });
        });

    </script>
@endsection
