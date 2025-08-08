@extends('layouts/layoutMaster')

@section('title', 'BlockUI - Extended UI')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/spinkit/spinkit.scss', 'resources/assets/vendor/libs/notiflix/notiflix.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/notiflix/notiflix.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/extended-ui-blockui.js'])
@endsection

@section('content')
<!-- Notiflix -->
<div class="row gy-6">
  <!-- Notiflix Section-->
  <div class="col-xl-6 col-12">
    <div class="card h-100">
      <h5 class="card-header">Basic Examples</h5>
      <div class="card-body">
        <div class="border p-4" id="section-block">
          <p>Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus vis et. No est volumus ocurreret vituperata.</p>
        </div>
        <div class="demo-inline-spacing">
          <button class="btn btn-primary btn-section-block">Default</button>
          <button class="btn btn-primary btn-section-block-overlay">Overlay Color</button>
          <button class="btn btn-primary btn-section-block-spinner">Custom Spinner</button>
          <button class="btn btn-primary btn-section-block-custom">Custom Message</button>
          <button class="btn btn-primary btn-section-block-multiple">Multiple Message</button>
          <button class="btn btn-primary remove-btn">remove/unblock</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Notiflix Section-->
  <!-- Notiflix Card-->
  <div class="col-xl-6 col-12">
    <div class="card" id="card-block">
      <h5 class="card-header">Card Blocking</h5>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus vis et. No est volumus ocurreret vituperata.</p>
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim</p>
        <div class="notiflix-btn demo-inline-spacing">
          <button class="btn btn-primary btn-card-block">Default</button>
          <button class="btn btn-primary btn-card-block-overlay">Overlay Color</button>
          <button class="btn btn-primary btn-card-block-spinner">Custom Spinner</button>
          <button class="btn btn-primary btn-card-block-custom">Custom Message</button>
          <button class="btn btn-primary btn-card-block-multiple">Multiple Message</button>
          <button class="btn btn-primary remove-card-btn">remove/unblock</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Notiflix Card-->
  <!-- Notiflix Page-->
  <div class="col-xl-6 col-12">
    <div class="card" id="page-block">
      <h5 class="card-header">Page Blocking</h5>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus vis et. No est volumus ocurreret vituperata.</p>
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim</p>
        <div class="block-ui-btn demo-inline-spacing">
          <button class="btn btn-primary btn-page-block">Default</button>
          <button class="btn btn-primary btn-page-block-overlay">Overlay Color</button>
          <button class="btn btn-primary btn-page-block-spinner">Custom Spinner</button>
          <button class="btn btn-primary btn-page-block-custom">Custom Message</button>
          <button class="btn btn-primary btn-page-block-multiple">Multiple Message</button>
          <button class="btn btn-primary remove-page-btn">remove/unblock</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Notiflix Page-->
  <!-- Notiflix options-->
  <div class="col-xl-6 col-12">
    <div class="card" id="option-block">
      <h5 class="card-header">Blocking with multiple options</h5>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus vis et. No est volumus ocurreret vituperata.</p>
        <p class="card-text">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim</p>
        <div class="notiflix2-btn demo-inline-spacing">
          <button class="btn btn-primary btn-option-block">Default</button>
          <button class="btn btn-primary btn-option-block-hourglass">Hourglass</button>
          <button class="btn btn-primary btn-option-block-circle">Circle</button>
          <button class="btn btn-primary btn-option-block-arrows">Arrows</button>
          <button class="btn btn-primary btn-option-block-dots">Dots</button>
          <button class="btn btn-primary btn-option-block-pulse">Pulse</button>
          <button class="btn btn-primary remove-option-btn">remove/unblock</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Notiflix options-->
  <!-- Notiflix Form-->
  <div class="col-xl-6 col-12">
    <div class="card">
      <h5 class="card-header">Form Block</h5>
      <div class="card-body">
        <div class="p-2 form-block">
          <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" for="username" id="username" placeholder="Username" />
            <label for="username">Username</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="email" class="form-control" id="email" placeholder="Email" />
            <label for="email">Email</label>
          </div>
          <div class="form-floating form-floating-outline mb-4">
            <input type="password" class="form-control" id="password" placeholder="Password" />
            <label for="password">Password</label>
          </div>
          <div class="mb-4 text-end">
            <button class="btn btn-primary disabled me-sm-4 me-2">Submit</button>
            <button class="btn btn-outline-secondary disabled">Reset</button>
          </div>
        </div>
        <div class="block-ui-btn demo-inline-spacing">
          <button class="btn btn-primary btn-form-block">Default</button>
          <button class="btn btn-primary btn-form-block-overlay">Overlay Color</button>
          <button class="btn btn-primary btn-form-block-spinner">Custom Spinner</button>
          <button class="btn btn-primary btn-form-block-custom">Custom Message</button>
          <button class="btn btn-primary btn-form-block-multiple">Multiple Message</button>
          <button class="btn btn-primary remove-form-btn">remove/unblock</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Notiflix Form-->
</div>
<!-- /Notiflix -->
@endsection