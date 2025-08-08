@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Gamifications- UI elements')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/cards-gamifications.scss')
@endsection

@section('content')
<div class="row gy-6 align-items-end">
  <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body text-nowrap">
        <h5 class="card-title mb-0 flex-wrap text-nowrap">Congratulations Norris! 🎉</h5>
        <p class="mb-2">Best seller of the month</p>
        <h4 class="text-primary mb-0">$42.8k</h4>
        <p class="mb-2">78% of target 🚀</p>
        <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
      </div>
      <img src="{{ asset('assets/img/illustrations/trophy.png') }}" class="position-absolute bottom-0 end-0 me-5 mb-5"
        width="83" alt="view sales" />
    </div>
  </div>

  <div class="col-lg-8 col-12 py-0 py-md-5 py-lg-0">
    <div class="card">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="card-body">
            <h4 class="card-title mb-9 text-truncate">Congratulations <span class="fw-bold">John!</span>🎉</h4>
            <p class="mb-0">You have done 72% 😎 more sales today. Check your new raising badge in your profile.</p>
          </div>
        </div>
        <div class="col-12 col-md-6 position-relative text-center">
          <img src="{{ asset('assets/img/illustrations/illustration-john-2.png') }}"
            class="card-img-position bottom-0 w-auto end-0 scaleX-n1-rtl" alt="View Profile" />
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8 col-12">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title text-truncate mb-9">Congratulations Daisy!🎉</h4>
            <p class="mb-0">You have done 84% 😍 more task today.</p>
            <p class="mb-0">Check your new badge in your profile.</p>
          </div>
        </div>
        <div class="col-md-6 position-relative text-center">
          <img src="{{ asset('assets/img/illustrations/illustration-john.png') }}"
            class="card-img-position bottom-0 w-auto end-0 scaleX-n1-rtl" alt="View Profile" />
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-0">Upgrade Account 😀</h5>
        <p class="mb-3">Add 15 team members</p>
        <h4 class="text-primary mb-0">$199</h4>
        <p class="mb-3">40% OFF 😍</p>
        <a href="javascript:;" class="btn btn-sm btn-primary">Upgrade Plan</a>
      </div>
      <img src="{{ asset('assets/img/icons/misc/triangle-' . $configData['theme'] . '.png') }}"
        class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background"
        data-app-light-img="icons/misc/triangle-light.png" data-app-dark-img="icons/misc/triangle-dark.png" />
      <img src="{{ asset('assets/img/illustrations/illustration-upgrade-account-2.png') }}"
        class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-5 mb-3" height="176" alt="Upgrade Account" />
    </div>
  </div>
</div>
@endsection