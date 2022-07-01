@extends('layouts.base')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>Login
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="u-column1 col-md-6 offset-3">
                                        <div class="customer-login-form">
                                            <form method="post" action="{{route('login')}}" class="woocomerce-form woocommerce-form-login login">
                                                @csrf
                                                <p class="form-row form-row-wide">
                                                    <label for="email">Email address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" class="input-text" name="email" id="email"
                                                           placeholder="Enter your email address"
                                                           :value="old('email')"
                                                           required autofocus>
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="password">Password
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="input-text" type="password" name="password"
                                                           id="password"
                                                           placeholder="*************"
                                                           required
                                                           autocomplete="current-password">
                                                </p>
                                                <p class="form-row">
                                                    <input class="woocommerce-Button button" type="submit" value="Login" name="login">
                                                    <label for="remember" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="remember" type="checkbox" id="remember" value="forever"> Remember me
                                                    </label>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="{{route('password.request')}}">Lost your password?</a>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="{{route('register')}}">Create account?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- .woocommerce-form-login -->
                                    </div>
                                    <!-- .customer-login-form -->
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
