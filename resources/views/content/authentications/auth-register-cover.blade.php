@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register Cover - Pages')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/pages-auth.js'])
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="auth-cover-brand d-flex align-items-center gap-3">
    <span class="app-brand-logo demo">@include('_partials.macros')</span>
    <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center justify-content-center p-12 pb-2">
      <div>
        <img
          src="{{ asset('assets/img/illustrations/auth-cover-register-illustration-' . $configData['theme'] . '.png') }}"
          class="authentication-image-model d-none d-lg-block" alt="auth-model"
          data-app-light-img="illustrations/auth-cover-register-illustration-light.png"
          data-app-dark-img="illustrations/auth-cover-register-illustration-dark.png" />
      </div>
      <img src="{{ asset('assets/img/illustrations/tree-2.png') }}" alt="tree" class="authentication-image-tree z-n1" />
      <img src="{{ asset('assets/img/illustrations/auth-cover-mask-' . $configData['theme'] . '.png') }}"
        class="scaleX-n1-rtl authentication-image d-none d-lg-block w-75" height="362" alt="triangle-bg"
        data-app-light-img="illustrations/auth-cover-mask-light.png"
        data-app-dark-img="illustrations/auth-cover-mask-dark.png" />
    </div>
    <!-- /Left Text -->

    <!-- Register -->
    <div
      class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg position-relative py-sm-5 px-12 py-4">
      <div class="w-px-400 mx-auto pt-12 pt-lg-0">
        <h4 class="mb-1">Adventure starts here 🚀</h4>
        <p class="mb-5">Make your app management easy and fun!</p>

        <form id="formAuthentication" class="mb-5" action="{{ url('/') }}" method="GET">
          <div class="form-floating form-floating-outline mb-5 form-control-validation">
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
              autofocus />
            <label for="username">Username</label>
          </div>
          <div class="form-floating form-floating-outline mb-5 form-control-validation">
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
            <label for="email">Email</label>
          </div>
          <div class="mb-5 form-password-toggle form-control-validation">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="password" id="password" class="form-control" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" />
                <label for="password">Password</label>
              </div>
              <span class="input-group-text cursor-pointer"><i
                  class="icon-base ri ri-eye-off-line icon-20px"></i></span>
            </div>
          </div>
          <div class="mb-5 py-2 form-control-validation">
            <div class="form-check mb-0">
              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
              <label class="form-check-label" for="terms-conditions">
                I agree to
                <a href="javascript:void(0);">privacy policy & terms</a>
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100">Sign up</button>
        </form>

        <p class="text-center mb-5">
          <span>Already have an account?</span>
          <a href="{{ url('auth/login-cover') }}">
            <span>Sign in instead</span>
          </a>
        </p>

        <div class="divider my-5">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center gap-2">
          <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
            <i class="icon-base ri ri-facebook-fill icon-24px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
            <i class="icon-base ri ri-twitter-fill icon-24px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-github">
            <i class="icon-base ri ri-github-fill icon-24px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
            <i class="icon-base ri ri-google-fill icon-24px"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection