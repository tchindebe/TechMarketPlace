{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
@csrf

<div>
    <x-jet-label for="name" value="{{ __('Name') }}" />
    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
</div>

<div class="mt-4">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
</div>

<div class="mt-4">
    <x-jet-label for="password" value="{{ __('Password') }}" />
    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
        autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation"
        required autocomplete="new-password" />
</div>

@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
<div class="mt-4">
    <x-jet-label for="terms">
        <div class="flex items-center">
            <x-jet-checkbox name="terms" id="terms" />

            <div class="ml-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                    class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                    class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}
            </div>
        </div>
    </x-jet-label>
</div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-jet-button class="ml-4">
        {{ __('Register') }}
    </x-jet-button>
</div>
</form>
</x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.base')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
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
                                        <div class="card">
                                            <div class="card-header">
                                                <h2>Register</h2>
                                            </div>
                                            <div class="card-body">
                                                <x-jet-validation-errors class="mb-4" />

                                                @if (session('status'))
                                                <div class="mb-4 text-sm font-medium text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                                @endif

                                                <form method="post" action="{{route('register')}}"
                                                    class="woocomerce-form woocommerce-form-login login">
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
                                                        <select name="user_type" class="shadow-sm" id="">
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Client">Client</option>
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Service">Service</option>
                                                            <option class="shadow-sm woocommerce-Input woocommerce-Input--text input-text" required value="Boutique">Boutique</option>
                                                        </select>
                                                    </p>
                                                    <p class="form-row ">
                                                        <input type="submit" class="woocommerce-Button  button" name="register" value="Register">
                                                    </p>
                                                    <p class="form-row">
                                                        <span class="menu-item menu-item-has-children">
                                                        <a class="woocommerce-Button button" title="Login" href="{{route('login')}}">
                                                            Login</a>
                                                    </span>
                                                    </p>
                                                </form>
                                            </div>
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
