@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Reset Password Basic - Pages')

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
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-6 mx-4">
      <div class="card p-sm-7 p-2">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{ url('/') }}" class="app-brand-link gap-3">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <!-- Reset Password -->
        <div class="card-body mt-1">
          <h4 class="mb-1">Reset Password 🔒</h4>
          <p class="mb-5">Your new password must be different from previously used passwords</p>
          <form id="formAuthentication" class="mb-5" action="{{ url('auth/login-basic') }}" method="GET">
            <div class="mb-5 form-password-toggle form-control-validation">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <label for="password">New Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i
                    class="icon-base ri ri-eye-off-line icon-20px"></i></span>
              </div>
            </div>
            <div class="mb-5 form-password-toggle form-control-validation">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input type="password" id="confirm-password" class="form-control" name="confirm-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <label for="confirm-password">Confirm Password</label>
                </div>
                <span class="input-group-text cursor-pointer"><i
                    class="icon-base ri ri-eye-off-line icon-20px"></i></span>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-5">Set new password</button>
            <div class="text-center">
              <a href="{{ url('auth/login-basic') }}" class="d-flex align-items-center justify-content-center">
                <i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-20px me-1_5"></i>
                Back to login
              </a>
            </div>
          </form>
        </div>
      </div>
      <!-- /Reset Password -->
      <img src="{{ asset('assets/img/illustrations/tree-3.png') }}" alt="auth-tree"
        class="authentication-image-object-left d-none d-lg-block" />
      <img src="{{ asset('assets/img/illustrations/auth-basic-mask-' . $configData['theme'] . '.png') }}"
        class="authentication-image d-none d-lg-block scaleX-n1-rtl" height="172" alt="triangle-bg"
        data-app-light-img="illustrations/auth-basic-mask-light.png"
        data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
      <img src="{{ asset('assets/img/illustrations/tree.png') }}" alt="auth-tree"
        class="authentication-image-object-right d-none d-lg-block" />
    </div>
  </div>
</div>
@endsection
