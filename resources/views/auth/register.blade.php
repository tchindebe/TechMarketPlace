<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
@csrf

<div>
    <x-jet-label for="name" value="{{ __('Name') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
</div>

<div class="mt-4">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
</div>

<div class="mt-4">
    <x-jet-label for="password" value="{{ __('Password') }}" />
    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
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
                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}
            </div>
        </div>
    </x-jet-label>
</div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-jet-button class="ml-4">
        {{ __('Register') }}
    </x-jet-button>
</div>
</form>
</x-jet-authentication-card>
</x-guest-layout>

{{-- <x-guest-layout>
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
                                                <h2>Register</h2>
                                            </div>
                                            <div class="card-body">
                                                <x-jet-validation-errors class="mb-4" />

                                                @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                                @endif

                                                <form method="post" action="{{route('register')}}"
                                                    class="woocomerce-form woocommerce-form-login login">
                                                    @csrf
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="name" value="" id="email" name="name" class="woocommerce-Input woocommerce-Input--text input-text" :value="old('name')" required autofocus
                                                        autocomplete="name" >
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="email" name="email" class="woocommerce-Input woocommerce-Input--text input-text" :value="old('email')" required>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text" required autocomplete="new-password">
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="submit" class="woocommerce-Button button" name="register" value="Register">
                                                    </p>
                                                    <div class="register-benefits">
                                                        <h3>Sign up today and you will be able to :</h3>
                                                        <ul>
                                                            <li>Speed your way through checkout</li>
                                                            <li>Track your orders easily</li>
                                                            <li>Keep a record of all your purchases</li>
                                                        </ul>
                                                    </div>
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
</x-guest-layout> --}}
