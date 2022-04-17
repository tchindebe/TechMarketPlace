@extends('layouts.base')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>Login or Register
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="customer-login-form">
                                        <span class="or-text">or</span>
                                        <div id="customer_login" class="u-columns col2-set">
                                            <div class="u-column1 col-1">
                                                <h2>Login</h2>
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
                                                </form>
                                                <!-- .woocommerce-form-login -->
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="u-column2 col-2">
                                                @if (session('status'))
                                                    <div class="mb-4 text-sm font-medium text-green-600">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <h2>Register</h2>
                                                <form method="post" action="{{route('register')}}" class="woocomerce-form woocommerce-form-login login">
                                                    @csrf
                                                    <p class="form-row form-row-wide ">
                                                        <label for="reg_email">Name user
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="name" value="" id="email" name="name" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" :value="old('name')" required autofocus
                                                               autocomplete="name" >
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="email" name="email" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" :value="old('email')" required>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="password" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required autocomplete="new-password">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="confirm_password">Confirm password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="confirm_password" name="password_confirmation" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required autocomplete="new-password">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">account type
                                                            <span class="required">*</span>
                                                        </label>
                                                        <select name="user_type" class="shadow-sm" id="reg_password">
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Client">Client</option>
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Service">Service</option>
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Boutique">Boutique</option>
                                                        </select>
                                                    </p>
                                                    <p class="form-row ">
                                                        <input type="submit" class="woocommerce-Button  button" name="register" value="Register">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
