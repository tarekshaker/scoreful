@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp
@extends('layouts/layoutMaster')

@section('title', 'Forgot Password')

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
      <!-- Logo -->
      <div class="card p-sm-7 p-2">
        <!-- Forgot Password -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{ url('/') }}" class="app-brand-link gap-3">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <div class="card-body mt-1">
          <h4 class="mb-1">Forgot Password? 🔒</h4>
          <p class="mb-5">Enter your email and we'll send you instructions to reset your password</p>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
              @if (!empty($sentTo))
                <div class="small text-muted mt-1">Sent to: {{ $sentTo }}</div>
              @endif
            </div>
            <form id="resendForm" class="mb-5" action="{{ url('admin/forget-password') }}" method="POST">
              @csrf
              <input type="hidden" name="email" value="{{ $sentTo ?? old('email') }}" />
              <button id="resendBtn" class="btn btn-secondary d-grid w-100 mb-2" disabled>Resend email (30)</button>
            </form>
            <div class="text-center">
              <a href="{{ url('admin/login') }}" class="d-flex align-items-center justify-content-center">
                <i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-20px me-1_5"></i>
                Back to login
              </a>
            </div>
          @else
            <form id="formAuthentication" class="mb-5" action="{{ url('admin/forget-password') }}" method="POST">
              @csrf
              <div class="form-floating form-floating-outline mb-5 form-control-validation">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email"
                  value="{{ old('email') }}" required autofocus />
                <label>Email</label>
                @error('email')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <button class="btn btn-primary d-grid w-100 mb-5">Send Reset Link</button>
            </form>
            <div class="text-center">
              <a href="{{ url('admin/login') }}" class="d-flex align-items-center justify-content-center">
                <i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-20px me-1_5"></i>
                Back to login
              </a>
            </div>
          @endif

          @if ($errors->any() && !session('status'))
            <div class="alert alert-danger mt-3" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if (!empty($resendNotBefore))
            <script>
              (function(){
                try {
                  var resendBtn = document.getElementById('resendBtn');
                  if (!resendBtn) return; // only when status shown
                  var target = {{ $resendNotBefore }} * 1000;
                  function tick(){
                    var now = Date.now();
                    var diff = Math.ceil((target - now)/1000);
                    if (diff <= 0) {
                      resendBtn.disabled = false;
                      resendBtn.textContent = 'Resend email';
                      return;
                    }
                    resendBtn.disabled = true;
                    resendBtn.textContent = 'Resend email ('+diff+')';
                    setTimeout(tick, 500);
                  }
                  tick();
                } catch(e) { /* no-op */ }
              })();
            </script>
          @endif
        </div>
      </div>
      <!-- /Forgot Password -->
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
