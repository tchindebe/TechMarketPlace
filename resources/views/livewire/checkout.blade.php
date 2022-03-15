@extends('layouts.base')

@section('content')
    @if(Auth::user()->user_type == "Client" && $total > 0)
        <div class="woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase">
            <div id="page" class="hfeed site">
                <div id="content" class="site-content">
                    <div class="col-full">
                        <div class="row">
                            <nav class="woocommerce-breadcrumb">
                                <a href="home-v1.html">Home</a>
                                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                                Checkout
                            </nav>
                            <!-- .woocommerce-breadcrumb -->
                            <div class="content-area" id="primary">
                                <main class="site-main" id="main">
                                    <div class="type-page hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                                <!-- .collapse -->
                                                <div class="woocommerce-info">Have a coupon? <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">Click here to enter your code</a>
                                                </div>
                                                <div class="collapse" id="checkoutCouponForm">
                                                    <form method="post" class="checkout_coupon">
                                                        <p class="form-row form-row-first">
                                                            <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                                        </p>
                                                        <p class="form-row form-row-last">
                                                            <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                                        </p>
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                                <!-- .collapse -->
                                                <form action="{{route('livewire.store')}}" method="post" class="checkout woocommerce-checkout">
                                                    @csrf
                                                    <div id="customer_details" class="col2-set">
                                                        <div class="col-1">
                                                            <div class="woocommerce-billing-fields">
                                                                <h3>Billing Details</h3>
                                                                <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                            <label class="" for="billing_first_name">First Name
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="text" placeholder="Your first name" id="billing_first_name" name="firstName" class="input-text @error('firstName') is-invalid @enderror">
                                                                            @error('firstName')
                                                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                                            <label class="" for="billing_last_name">Last Name
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="text" value="" {{ (old('lastName')) }} placeholder="Your last name" id="billing_last_name" name="lastName" class="input-text @error('lastName') is-invalid @enderror">
                                                                            @error('lastName')
                                                                            <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                        <div class="clear"></div>
                                                                        <p id="billing_country_field" class="form-row form-row-wide validate-required validate-email">
                                                                            <label class="" for="billing_country">Country
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible " id="billing_country" name="country" tabindex="-1" aria-hidden="true">
                                                                                <option value="CAMEROUN">Cameroon</option>
                                                                            </select>
                                                                        </p>
                                                                        <div class="clear"></div>
                                                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                            <label class="" for="billing_address_1">Street address
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="text" {{ (old('address')) }} value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text @error('address') is-invalid @enderror">
                                                                            @error('address')
                                                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                        <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                                            <label class="" for="billing_state">City
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="billing_state" name="city" tabindex="-1" aria-hidden="true">
                                                                                <option value="Yaoundé">Yaoundé</option>
                                                                                <option value="Douala">Douala</option>
                                                                                <option value="Bafoussam">Baffoussam</option>
                                                                                <option value="BRDchang">Dchang</option>
                                                                            </select>
                                                                        </p>
                                                                        <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                            <label class="" for="billing_postcode">Postcode / ZIP
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="text" {{ (old('bp')) }} value="" placeholder="" id="billing_postcode" name="bp" class="input-text @error('bp') is-invalid @enderror">
                                                                            @error('bp')
                                                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                                            <label class="" for="billing_phone">Phone
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="nomber" {{ (old('phone')) }} value="" placeholder="Your phone" id="billing_phone" name="phone" class="input-text @error('phone') is-invalid @enderror">
                                                                            @error('phone')
                                                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                                            <label class="" for="billing_email">Email Address
                                                                                <abbr title="required" class="required">*</abbr>
                                                                            </label>
                                                                            <input type="email" {{ (old('email')) }} value="{{Auth::User()->email}}" placeholder="" id="billing_email" name="email" class="input-text @error('email') is-invalid @enderror">
                                                                            @error('email')
                                                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col2-set -->
                                                    <h3 id="order_review_heading">Your order</h3>
                                                    <div class="woocommerce-checkout-review-order" id="order_review">
                                                        <div class="order-review-wrapper">
                                                            <h3 class="order_review_heading">Your Order</h3>
                                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Total</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($content as $content)
                                                                        <tr class="cart_item">
                                                                            <td class="product-name">
                                                                                <strong class="product-quantity">{{$content->quantity}} ×</strong> {{$content->name}}&nbsp;
                                                                            </td>
                                                                            <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol"></span>{{$content->price}} Fcfa</span>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol"></span>{{$subTotal}} Fcfa</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol"></span>{{$total}} Fcfa</span>
                                                                        </strong>
                                                                    </td>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                            <!-- /.woocommerce-checkout-review-order-table -->
                                                            <div class="woocommerce-checkout-payment" id="payment">
                                                                <ul class="wc_payment_methods payment_methods methods">
                                                                    <li class="wc_payment_method payment_method_cod">
                                                                        <input type="radio" data-order_button_text="" checked="checked" value="Cash on delivery" name="payment_method" class="input-radio" id="payment_method_cod">
                                                                        <label for="_cod">Cash on delivery </label>
                                                                        payment_method
                                                                    </li>
                                                                    <li class="wc_payment_method payment_method_bacs">
                                                                        <input type="radio" data-order_button_text=""  disabled value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                                        <label for="payment_method_bacs">Direct bank transfer</label>

                                                                    </li>
                                                                    <li class="wc_payment_method payment_method_cheque">
                                                                        <input type="radio" data-order_button_text="" value="cheque" disabled name="payment_method" class="input-radio" id="payment_method_cheque">
                                                                        <label for="payment_method_cheque">Check payments </label>

                                                                    </li>
                                                                </ul>
                                                                <div class="form-row place-order">
                                                                    <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                            <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                            <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                    </p>
                                                                    <input type="submit" value="Place order" class="button wc-forward text-center">
                                                                </div>
                                                            </div>
                                                            <!-- /.woocommerce-checkout-payment -->
                                                        </div>
                                                        <!-- /.order-review-wrapper -->
                                                    </div>
                                                    <!-- .woocommerce-checkout-review-order -->
                                                </form>
                                                <!-- .woocommerce-checkout -->
                                            </div>
                                            <!-- .woocommerce -->
                                        </div>
                                        <!-- .entry-content -->
                                    </div>
                                    <!-- #post-## -->
                                </main>
                                <!-- #main -->
                            </div>
                            <!-- #primary -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- #content -->
            </div>
        </div>
    @else
        <div class="alert alert-danger">
            <strong>you should have a customer account to access this feature. please login as customer or create a customer account. <a href="{{route('login')}}">Here</a></strong>
        </div>
    @endif

@endsection
