{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autofocus />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif

        <x-jet-button class="ml-4">
            {{ __('Log in') }}
        </x-jet-button>
    </div>
</form>
</x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.guest')

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span>My Account
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
                                                <h2>Login</h2>
                                            </div>\
                                            <div class="card-body">
                                                <x-jet-validation-errors class="mb-4" />

                                                @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                                @endif
                                                <form method="post" action="{{route('login')}}" class="woocomerce-form woocommerce-form-login login">
                                                    @csrf
                                                    <p class="form-row form-row-wide">
                                                        <label for="username">Email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" class="input-text" name="email" id="email"
                                                            placeholder="Enter your email address" :value="old('email')"
                                                            required autofocus>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input class="input-text" type="password" name="password"
                                                            id="password" placeholder="*************" required
                                                            autocomplete="current-password">
                                                    </p>
                                                    <p class="form-row">
                                                        <input class="woocommerce-Button button" type="submit"
                                                            value="Login" name="login">
                                                        <label for="rememberme"
                                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                            <input
                                                                class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                                name="remember" type="checkbox" id="remember"
                                                                value="forever"> Remember me
                                                        </label>
                                                    </p>
                                                    <p class="woocommerce-LostPassword lost_password">
                                                        <a href="{{route('password.request')}}">Lost your password?</a>
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
