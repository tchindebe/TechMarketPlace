@extends('layouts.base')

@section('content')

    <div class="type-page hentry">
        <div class="entry-content">
            <div class="stretch-full-width-map">
                <iframe height="514" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.593303940039!2d-0.15470444843858283!3d51.53901886611164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ae62edd5771%3A0x27f2d823e2be0249!2sPrincess+Rd%2C+London+NW1+8JR%2C+UK!5e0!3m2!1sen!2s!4v1458827996435"></iframe>
            </div>
            <!-- .stretch-full-width-map -->
            <div class="row contact-info">
                <div class="col-md-9 left-col">
                    <div class="text-block">
                        <h2 class="contact-page-title">Leave us a Message</h2>
                        <p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices,
                            <br> neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                    </div>
                    <div>
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <div class="contact-form">
                        <div role="form" class="wpcf7" id="wpcf7-f425-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form class="wpcf7-form" novalidate="novalidate" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="firstName">First name
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <br>
                                        <span class="wpcf7-form-control-wrap first-name">
                                            <input id="firstName" type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="firstName">
                                        </span>
                                        @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <!-- .col -->
                                    <div class="col-xs-12 col-md-6">
                                        @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="lastName">Last name
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <br>
                                        <span class="wpcf7-form-control-wrap last-name">
                                            <input id="lastName" type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="lastName">
                                        </span>
                                    </div>
                                    <!-- .col -->
                                </div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="email">Email
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    <br>
                                    <span class="wpcf7-form-control-wrap subject">
                                        <input  id="email" type="text" aria-invalid="false" class="wpcf7-form-control wpcf7-text input-text" size="40" value="" name="email">
                                    </span>
                                </div>
                                <!-- .form-group -->

                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <br>
                                    <span class="wpcf7-form-control-wrap subject">
                                        <input id="subject" type="text" aria-invalid="false" class="wpcf7-form-control wpcf7-text input-text" size="40" value="" name="subject">
                                    </span>
                                </div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <br>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea id="message" aria-invalid="false" class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="message"></textarea>
                                    </span>
                                </div>
                                <!-- .form-group-->
                                <div class="form-group clearfix">
                                    <p>
                                        <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit">
                                    </p>
                                </div>
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success')}}
                                    </div>
                                @endif
                                <!-- .form-group-->
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                            <!-- .wpcf7-form -->
                        </div>
                        <!-- .wpcf7 -->
                    </div>
                    <!-- .contact-form7 -->
                </div>
                <!-- .col -->
                <!-- .col -->
            </div>
            <!-- .contact-info -->
        </div>
        <!-- .entry-content -->
    </div>

@endsection
