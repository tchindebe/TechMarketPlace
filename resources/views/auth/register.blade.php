@extends('layouts.base')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>Register
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="u-column1 col-md-6 offset-3">
                                        <div class="customer-login-form">
                                            <x-jet-validation-errors class="mb-4" />
                                            <form method="post" action="{{route('register')}}" class="woocomerce-form woocommerce-form-login login">
                                                @csrf
                                                <p class="form-row form-row-wide ">
                                                    <label for="reg_email">Name user
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" value="" id="email" name="name" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" :value="old('name')" autofocus
                                                           autocomplete="name" >
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_email">Email address
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email" value="" id="email" name="email" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" :value="old('email')">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">Password
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="password" id="reg_password" name="password" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" autocomplete="new-password">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="confirm_password">Confirm password
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="password" id="confirm_password" name="password_confirmation" class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" autocomplete="new-password">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label for="reg_password">account type
                                                        <span class="required">*</span>
                                                    </label>
                                                    <select name="user_type" class="shadow-sm" id="reg_password">
                                                        <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" value="Client">Client</option>
                                                        <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" value="Service">Service</option>
                                                        <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" value="Boutique">Boutique</option>
                                                    </select>
                                                </p>
                                                <p class="form-row ">
                                                    <input type="submit" class="woocommerce-Button  button" name="register" value="Register">
                                                </p>
                                            </form>
                                            <p class="woocommerce-LostPassword lost_password">
                                                <a href="{{route('login')}}">Go to login if you have account ! </a>
                                            </p>
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
