@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Cards Advance- UI elements')

@section('vendor-style')
@vite(['resources/assets/vendor/fonts/flag-icons.scss',
'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
'resources/assets/vendor/libs/raty-js/raty-js.scss',
'resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/cleave-zen/cleave-zen.js',
'resources/assets/vendor/libs/apex-charts/apexcharts.js',
'resources/assets/vendor/libs/raty-js/raty-js.js',
'resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/cards-advance.js', 'resources/assets/js/modal-add-new-cc.js'])
@endsection

@section('content')
<div class="row g-6">
  <!-- Transactions -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-danger rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/paypal.svg') }}" alt="paypal" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Paypal</h6>
                <p class="mb-0">Received Money</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">+$24,820</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-success rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/credit-card.svg') }}" alt="paypal" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Credit Card</h6>
                <p class="mb-0">Digital Ocean</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">-$1,250</h6>
                <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-warning rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/card-atm.svg') }}" alt="paypal" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Mastercard</h6>
                <p class="mb-0">Netflix</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">-$99</h6>
                <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-primary rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/wallet.svg') }}" alt="paypal" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Wallet</h6>
                <p class="mb-0">Mac'D</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">-$82</h6>
                <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-success rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/credit-card.svg') }}" alt="paypal" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">ATM Card</h6>
                <p class="mb-0">Digital Ocean</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">-$550</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="me-4">
              <div class="avatar flex-shrink-0">
                <div class="avatar-initial bg-label-info rounded">
                  <div>
                    <img src="{{ asset('assets/img/icons/unicons/arrow-growth.svg') }}" alt="paypal"
                      class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Trasnfer</h6>
                <p class="mb-0">Refund</p>
              </div>
              <div class="user-progress d-flex align-items-center gap-3">
                <h6 class="mb-0">+$8,934</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->

  <!-- Upgrade Plan -->
  <div class="col-md-6 col-xxl-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Upgrade Your Plan</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="upgradePlanCard" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="upgradePlanCard">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <small>Please make the payment to start enjoying all the features of our premium plan as soon as
          possible.</small>
        <div class="bg-label-primary p-4 rounded my-3">
          <div class="d-flex">
            <div class="avatar flex-shrink-0 me-4">
              <div class="avatar-initial bg-label-primary rounded">
                <div>
                  <img src="{{ asset('assets/img/icons/unicons/briefcase.png') }}" alt="paypal" />
                </div>
              </div>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Platinum</h6>
                <a href="javascript:void(0)" class="small" data-bs-target="#upgradePlanModal"
                  data-bs-toggle="modal">Upgrade Plan</a>
              </div>
              <div class="user-progress">
                <div class="d-flex justify-content-center">
                  <sup class="mt-5 mb-0 text-heading small">$</sup>
                  <h4 class="fw-medium mb-0">5,250</h4>
                  <sub class="mt-auto mb-4 text-heading small"> /Year</sub>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form id="paymentDetailsForm" onsubmit="return false">
          <h6 class="mb-2">Payment Details</h6>
          <div class="d-flex align-items-center mb-2">
            <div class="me-3">
              <img src="{{ asset('assets/img/icons/payments/logo-mastercard-small.png') }}" alt="credit card"
                height="30" />
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div>
                <h6 class="mb-1">Credit Card</h6>
                <small>5688 xxxx xxxx 2356</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control form-control-sm cvv-code-payment" maxlength="3"
                  placeholder="CVV" />
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="me-3">
              <img src="{{ asset('assets/img/icons/payments/logo-credit-card-2.png') }}" alt="credit card"
                height="30" />
            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
              <div>
                <h6 class="mb-1">Credit Card</h6>
                <small>8562 xxxx xxxx 4563</small>
              </div>
              <div class="w-px-75">
                <input type="text" class="form-control form-control-sm cvv-code-payment" maxlength="3"
                  placeholder="CVV" />
              </div>
            </div>
          </div>
          <a href="javascript:;" class="d-block my-2 small" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Add
            Payment Method </a>
          <div class="col-12 mb-2 pb-2">
            <input id="addEmail" name="addEmail" class="form-control form-control-sm" type="text"
              placeholder="Email Address" />
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100"><span class="me-1">Contact Now</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/ Upgrade Plan -->

  <!-- Meeting Schedule -->
  <div class="col-md-6 col-xxl-4 order-0 order-sm-2 order-xxl-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Meeting Schedule</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="meetingSchedule" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="meetingSchedule">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/4.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Call with Woods</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-primary rounded-pill">Business</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/5.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Conference call</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-warning rounded-pill">Dinner</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/3.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting with Mark</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-secondary rounded-pill">Meetup</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/14.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting in Oakland</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-danger rounded-pill">Dinner</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/8.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Call with hilda</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-success rounded-pill">Meditation</div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Meeting with Carl</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-primary rounded-pill">Business</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Meeting Schedule -->

  <!-- Team Members -->
  <div class="col-xxl-5">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Team Members</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
            <a class="dropdown-item" href="javascript:void(0);">Update</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-borderless">
          <thead>
            <tr class="border-bottom">
              <th class="bg-transparent">Name</th>
              <th class="bg-transparent">Project</th>
              <th class="bg-transparent">Task</th>
              <th class="bg-transparent">Progress</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Dean Hogan</h6>
                    <p class="text-truncate mb-0">IOS developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-primary rounded-pill">Zipcar</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">87</span>/135</p>
              </td>
              <td>
                <div class="chart-progress" data-color="primary" data-series="65"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{ asset('assets/img/avatars/8.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Hilda Rice</h6>
                    <p class="text-truncate mb-0">Laravel developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-success rounded-pill">Brandi</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">340</span>/420</p>
              </td>
              <td>
                <div class="chart-progress" data-color="success" data-series="85"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Andrew O'Brian</h6>
                    <p class="text-truncate mb-0">React developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-warning rounded-pill">Payers</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">50</span>/82</p>
              </td>
              <td>
                <div class="chart-progress" data-color="warning" data-series="50"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Elanor Price</h6>
                    <p class="text-truncate mb-0">Angular developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-danger rounded-pill">Bitbank</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">96</span>/260</p>
              </td>
              <td>
                <div class="chart-progress" data-color="danger" data-series="75"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                  <div class="avatar me-4">
                    <img src="{{ asset('assets/img/avatars/11.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-1 text-truncate">Carl Oliver</h6>
                    <p class="text-truncate mb-0">VueJs developer</p>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-label-secondary rounded-pill">Aviato</span></td>
              <td>
                <p class="fw-medium"><span class="text-primary">12</span>/25</p>
              </td>
              <td>
                <div class="chart-progress" data-color="secondary" data-series="65"></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Team Members -->

  <!-- Deposit / Withdraw -->
  <div class="col-xxl-7">
    <div class="card-group">
      <div class="card mb-0">
        <div class="card-body card-separator">
          <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
            <h5 class="m-0 me-2">Deposit</h5>
            <a class="fw-medium" href="javascript:void(0);">View all</a>
          </div>
          <div class="deposit-content pt-2">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/gumroad.png') }}" class="img-fluid" alt="gumroad"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Gumroad Account</h6>
                    <p class="mb-0">Sell UI Kit</p>
                  </div>
                  <h6 class="text-success mb-0">+$4,650</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/mastercard-2.png') }}" class="img-fluid"
                    alt="mastercard" height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Mastercard</h6>
                    <p class="mb-0">Wallet deposit</p>
                  </div>
                  <h6 class="text-success mb-0">+$92,705</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/stripes.png') }}" class="img-fluid" alt="stripes"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Stripe Account</h6>
                    <p class="mb-0">iOS Application</p>
                  </div>
                  <h6 class="text-success mb-0">+$957</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/american-bank.png') }}" class="img-fluid" alt="american"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">American Bank</h6>
                    <p class="mb-0">Bank Transfer</p>
                  </div>
                  <h6 class="text-success mb-0">+$6,837</h6>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/citi.png') }}" class="img-fluid" alt="citi" height="30"
                    width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Bank Account</h6>
                    <p class="mb-0">Wallet deposit</p>
                  </div>
                  <h6 class="text-success mb-0">+$446</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card mb-0">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
            <h5 class="m-0 me-2">Withdraw</h5>
            <a class="fw-medium" href="javascript:void(0);">View all</a>
          </div>
          <div class="withdraw-content pt-2">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/brands/google.png') }}" class="img-fluid" alt="google"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Google Adsense</h6>
                    <p class="mb-0">Paypal deposit</p>
                  </div>
                  <h6 class="text-danger mb-0">-$145</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/brands/github.png') }}" class="img-fluid" alt="github"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Github Enterprise</h6>
                    <p class="mb-0">Security &amp; compliance</p>
                  </div>
                  <h6 class="text-danger mb-0">-$1870</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/brands/slack.png') }}" class="img-fluid" alt="slack" height="30"
                    width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Upgrade Slack Plan</h6>
                    <p class="mb-0">Debit card deposit</p>
                  </div>
                  <h6 class="text-danger mb-0">$450</h6>
                </div>
              </li>
              <li class="d-flex mb-4 align-items-center pb-2">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/payments/digital-ocean.png') }}" class="img-fluid" alt="digital"
                    height="30" width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Digital Ocean</h6>
                    <p class="mb-0">Cloud Hosting</p>
                  </div>
                  <h6 class="text-danger mb-0">-$540</h6>
                </div>
              </li>
              <li class="d-flex align-items-center">
                <div class="flex-shrink-0 me-4">
                  <img src="{{ asset('assets/img/icons/brands/aws.png') }}" class="img-fluid" alt="aws" height="30"
                    width="30" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">AWS Account</h6>
                    <p class="mb-0">Choosing a Cloud Platform</p>
                  </div>
                  <h6 class="text-danger mb-0">-$21</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Deposit / Withdraw -->

  <!-- Total Earnings -->
  <div class="col-md-6 col-xxl-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Total Earning</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-5">
          <div class="d-flex align-items-center">
            <h3 class="mb-0">$24,895</h3>
            <span class="text-success ms-2">
              <i class="icon-base ri ri-arrow-up-s-line icon-sm"></i>
              <span>10%</span>
            </span>
          </div>
          <p class="mb-0">Compared to $84,325 last year</p>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <img src="{{ asset('assets/img/icons/misc/zipcar.png') }}" alt="zipcar" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Zipcar</h6>
                <p class="mb-0">Vuejs, React & HTML</p>
              </div>
              <div>
                <h6 class="mb-2">$24,895.65</h6>
                <div class="progress bg-label-primary" style="height: 4px;">
                  <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <img src="{{ asset('assets/img/icons/misc/bitbank.png') }}" alt="bitbank" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bitbank</h6>
                <p class="mb-0">Sketch, Figma & XD</p>
              </div>
              <div>
                <h6 class="mb-2">$8,6500.20</h6>
                <div class="progress bg-label-info" style="height: 4px;">
                  <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
              <img src="{{ asset('assets/img/icons/misc/aviato.png') }}" alt="aviato" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Aviato</h6>
                <p class="mb-0">HTML & Angular</p>
              </div>
              <div>
                <h6 class="mb-2">$1,2450.80</h6>
                <div class="progress bg-label-secondary" style="height: 4px;">
                  <div class="progress-bar bg-secondary" style="width: 75%" role="progressbar" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Total Earnings -->

  <!-- Finance Summary -->
  <div class="col-md-6 col-xxl-5">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div>
          <h5 class="card-title m-0 me-2">Finance Summary</h5>
          <p class="card-subtitle mb-0">Check out each Column for more details</p>
        </div>
        <span class="badge bg-label-primary rounded-circle p-2">
          <i class="icon-base ri ri-question-line icon-28px"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="row align-items-center g-4">
          <div class="col-sm-6">
            <p class="mb-1">Annual Companies Taxes</p>
            <h5>$1450.35</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Next Tax Review Date</p>
            <h5>July 14, 2021</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Average Product Price</p>
            <h5>$85.50</h5>
          </div>
          <div class="col-sm-6">
            <p class="mb-1">Satisfaction Rate</p>
            <div class="d-flex align-items-center mb-3">
              <div class="progress w-50 bg-label-primary" style="height: 6px;">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
              <p class="ms-2 mb-0">75%</p>
            </div>
          </div>
          <div class="col-sm-6 pt-3">
            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy"
                class="avatar pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" />
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske"
                class="avatar pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" />
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol"
                class="avatar pull-up">
                <img class="rounded-circle" src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" />
              </li>
              <li class="avatar">
                <span class="avatar-initial rounded-circle pull-up bg-lighter text-body" data-bs-toggle="tooltip"
                  data-bs-placement="bottom" title="4 more">+4</span>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 pt-3">
            <span class="badge bg-label-primary rounded-pill">5 Days Ago</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Finance Summary -->

  <!-- Social Analytics -->
  <div class="col-md-6 col-xxl-3 order-0 order-sm-4 order-xxl-0">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2 text-nowrap">Social Analytics</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="socialAnalytics" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="socialAnalytics">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
            <a class="dropdown-item" href="javascript:void(0);">Update</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex align-items-center mb-4 pt-1">
          <img src="{{ asset('assets/img/icons/misc/heart-' . $configData['theme'] . '.png') }}" height="40" alt="heart"
            data-app-light-img="icons/misc/heart-light.png" data-app-dark-img="icons/misc/heart-dark.png" />
          <div class="ms-4 d-flex flex-column">
            <h5 class="mb-0">42.8k</h5>
            <p class="mb-0">Number of like</p>
          </div>
        </div>
        <div class="d-flex align-items-center mb-4">
          <img src="{{ asset('assets/img/icons/misc/chart-' . $configData['theme'] . '.png') }}" height="40" alt="chart"
            data-app-light-img="icons/misc/chart-light.png" data-app-dark-img="icons/misc/chart-dark.png" />
          <div class="ms-4 d-flex flex-column">
            <h5 class="mb-0">21.2k</h5>
            <p class="mb-0">Number of Followers</p>
          </div>
        </div>
        <div class="d-flex align-items-center mb-4">
          <img src="{{ asset('assets/img/icons/misc/message-' . $configData['theme'] . '.png') }}" height="40"
            alt="message" data-app-light-img="icons/misc/message-light.png"
            data-app-dark-img="icons/misc/message-dark.png" />
          <div class="ms-4 d-flex flex-column">
            <h5 class="mb-0">2.4k</h5>
            <p class="mb-0">Number of Comments</p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <img src="{{ asset('assets/img/icons/misc/user-' . $configData['theme'] . '.png') }}" height="40" alt="user"
            data-app-light-img="icons/misc/user-light.png" data-app-dark-img="icons/misc/user-dark.png" />
          <div class="ms-4 d-flex flex-column">
            <h5 class="mb-0">389.50k</h5>
            <p class="mb-0">Number of Visits</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Social Analytics -->

  <!-- Website Statistics -->
  <div class="col-md-6 col-xxl-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Website Statistics</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="webStatistics" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="webStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body pt-5">
        <div class="d-flex justify-content-between align-items-end mb-5">
          <div>
            <h1 class="card-title mb-2">4,590</h1>
            <small>Total Traffic</small>
          </div>
          <div id="webVisitors"></div>
        </div>
        <div>
          <div class="d-flex align-items-center py-3">
            <span class="text-success me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Direct</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">86,471</h6>
            <h6 class="text-end me-2 mb-0">15%</h6>
            <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
          </div>
          <div class="d-flex align-items-center border-top py-3">
            <span class="text-primary me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Organic Search</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">57,484</h6>
            <h6 class="text-end me-2 mb-0">85%</h6>
            <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
          </div>
          <div class="d-flex align-items-center border-top py-3">
            <span class="text-warning me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Referral</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">2,534</h6>
            <h6 class="text-end me-2 mb-0">48%</h6>
            <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
          </div>
          <div class="d-flex align-items-center border-top py-3">
            <span class="text-danger me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Mail</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">977</h6>
            <h6 class="text-end me-2 mb-0">36%</h6>
            <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
          </div>
          <div class="d-flex align-items-center border-top py-3">
            <span class="text-info me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Social</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">92</h6>
            <h6 class="text-end me-2 mb-0">55%</h6>
            <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
          </div>
          <div class="d-flex align-items-center border-top pt-3">
            <span class="text-secondary me-2">
              <i class="icon-base ri ri-circle-fill icon-16px"></i>
            </span>
            <h6 class="fw-normal mb-0">Other</h6>
            <div class="flex-grow-1"></div>
            <h6 class="text-end me-7 mb-0">28</h6>
            <h6 class="text-end me-2 mb-0">12%</h6>
            <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Website Statistics -->

  <!-- Developer Meetup -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <img class="card-img-top h-px-200" src="{{ asset('assets/img/elements/laptop.png') }}" alt="laptop image cap"
        style="object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex border-bottom pb-4">
          <div class="badge bg-label-primary d-flex flex-column justify-content-center px-4 rounded-3 me-4">
            <h6 class="text-primary mb-0 fw-normal">Jan</h6>
            <h5 class="text-primary mb-0">24</h5>
          </div>
          <div>
            <h6 class="card-title mb-1">Developer Meetup</h6>
            <small class="mb-0">The WordPress open source,free software project is the community behind the…</small>
          </div>
        </div>
        <div class="d-flex justify-content-between border-bottom mt-4">
          <div class="text-center">
            <span class="icon-base ri ri-star-smile-line icon-24px"></span>
            <p class="mt-1">Interested</p>
          </div>
          <div class="text-center">
            <span class="icon-base ri ri-check-double-line icon-24px"></span>
            <p class="mt-1">Joined</p>
          </div>
          <div class="text-center text-primary">
            <span class="icon-base ri ri-group-line icon-24px"></span>
            <p class="mt-1">Invited</p>
          </div>
          <div class="text-center">
            <span class="icon-base ri ri-more-fill icon-24px"></span>
            <p class="mt-1">More</p>
          </div>
        </div>
        <div>
          <div class="d-flex mt-4 gap-2">
            <span class="icon-base ri ri-time-line icon-20px"></span>
            <div>
              <p class="mb-0">Tuesday, 24 january, 10:20 - 12:30</p>
              <p class="mb-0">After 1 week</p>
            </div>
          </div>
          <div class="d-flex mt-3 gap-2">
            <span class="icon-base ri ri-map-pin-line icon-20px"></span>
            <div>
              <p class="mb-0">The Rochard NYC</p>
              <p class="mb-0">1305 Lexington Ave, New York</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Developer Meetup -->

  <!-- Sales by Countries -->
  <div class="col-md-6 col-xxl-4 order-0 order-md-1 order-xl-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Sales by Countries</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="saleStatus" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center mb-4">
            <div class="avatar me-4">
              <div class="avatar-initial bg-label-success rounded-circle">US</div>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">$8,656k</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                <span class="text-success">25.8%</span>
              </div>
              <p class="mb-0">United states of america</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">894k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center mb-4">
            <div class="avatar me-4">
              <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">$2,415k</h6>
                <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
                <span class="text-danger">6.2%</span>
              </div>
              <p class="mb-0">United Kingdom</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">645k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center mb-4">
            <div class="avatar me-4">
              <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">865k</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                <span class="text-success"> 12.4%</span>
              </div>
              <p class="mb-0">India</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">148k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center mb-4">
            <div class="avatar me-4">
              <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">$745k</h6>
                <i class="icon-base ri ri-arrow-down-s-line icon-24px text-danger"></i>
                <span class="text-danger">11.9%</span>
              </div>
              <p class="mb-0">Japan</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">86k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center mb-4">
            <div class="avatar me-4">
              <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">$45k</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                <span class="text-success">16.2%</span>
              </div>
              <p class="mb-0">Korea</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">42k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <span class="avatar-initial bg-label-primary rounded-circle">CH</span>
            </div>
            <div>
              <div class="d-flex align-items-center gap-1 mb-1">
                <h6 class="mb-0">$12k</h6>
                <i class="icon-base ri ri-arrow-up-s-line icon-24px text-success"></i>
                <span class="text-success">14.8%</span>
              </div>
              <p class="mb-0">China</p>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-1">8k</h6>
            <small class="text-body-secondary">Sales</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales by Countries -->

  <!-- Delivery Performance -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Delivery Performance</h5>
          <span class="text-body">12% increase in this month</span>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="deliveryPerformance" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryPerformance">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-primary"><i
                  class="icon-base ri ri-gift-line icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages in transit</h6>
                <small class="text-success fw-normal d-block">
                  <i class="icon-base ri ri-arrow-up-s-line me-1 icon-24px"></i>
                  25.8%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">10k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-info"><i
                  class="icon-base ri ri-car-line icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages out for delivery</h6>
                <small class="text-success fw-normal d-block">
                  <i class="icon-base ri ri-arrow-up-s-line me-1 icon-24px"></i>
                  4.3%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">5k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-success"><i
                  class="icon-base ri ri-check-line text-success icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Packages delivered</h6>
                <small class="text-danger fw-normal d-block">
                  <i class="icon-base ri ri-arrow-down-s-line me-1 icon-24px"></i>
                  12.5
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">15k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-warning"><i
                  class="icon-base ri ri-home-6-line icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Delivery success rate</h6>
                <small class="text-success fw-normal d-block">
                  <i class="icon-base ri ri-arrow-up-s-line me-1 icon-24px"></i>
                  35.6%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">95%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-secondary"><i
                  class="icon-base ri ri-time-line icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Average delivery time</h6>
                <small class="text-danger fw-normal d-block">
                  <i class="icon-base ri ri-arrow-down-s-line me-1 icon-24px"></i>
                  2.15
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">2.5 Days</h6>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-danger"><i
                  class="icon-base ri ri-user-3-line icon-26px"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0 fw-normal">Customer satisfaction</h6>
                <small class="text-success fw-normal d-block">
                  <i class="icon-base ri ri-arrow-up-s-line me-1 icon-24px"></i>
                  5.7%
                </small>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">4.5/5</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Delivery Performance -->
  <!-- Vehicles Condition -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Vehicles Condition</h5>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="vehiclesCondition" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehiclesCondition">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="success" data-series="83" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-success">Incorrect address</h6>
                  <small>all exceptions</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+10%</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="info" data-series="50" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-info">Good</h6>
                  <small>24 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+8.1</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="primary" data-series="35" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-primary">Average</h6>
                  <small>182 Tasks</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">-2.5%</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="chart-progress me-4" data-color="warning" data-series="28" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-warning">Bad</h6>
                  <small>8 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">-3.4%</div>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-8">
                <div class="me-2">
                  <h6 class="mb-2 text-danger">Not Working</h6>
                  <small>4 Vehicles</small>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="badge bg-label-secondary rounded-pill">+12.6%</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Vehicles Condition -->
  <!--Popular Instructors -->
  <div class="col-12 col-xxl-4 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Popular Instructors</h5>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="popularInstructors" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="px-5 py-4 border border-start-0 border-end-0">
        <div class="d-flex justify-content-between align-items-center">
          <small class="text-heading text-uppercase">Instructors</small>
          <small class="text-heading text-uppercase">courses</small>
        </div>
      </div>
      <div class="card-body pt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Maven Analytics</h6>
                <p class="mb-0 text-truncate">Business Intelligence</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">33</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Bentlee Emblin</h6>
                <p class="mb-0 text-truncate">Digital Marketing</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">52</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Benedetto Rossiter</h6>
                <p class="mb-0 text-truncate">UI/UX Design</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">12</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Beverlie Krabbe</h6>
                <p class="mb-0 text-truncate">React Native</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">8</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Nathan Wagner</h6>
                <p class="mb-0 text-truncate">iOS Developer</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">13</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <div class="avatar me-4">
              <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-1 text-truncate">Alma Gonzalez</h6>
                <p class="mb-0 text-truncate">Java Developer</p>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">9</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Popular Instructors -->
  <!-- Top Courses -->
  <div class="col-12 col-xxl-4 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Top Courses</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="topCourses" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-primary"><i
                  class="icon-base ri ri-vidicon-line icon-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Videography Basic Design Course</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill text-heading">1.2k Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-info"><i
                  class="icon-base ri ri-code-fill icon-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Basic Front-end Development Course</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill text-heading">834 Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-success"><i
                  class="icon-base ri ri-camera-fill icon-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Basic Fundamentals of Photography</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill text-heading">3.7k Views</div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-warning"><i
                  class="icon-base ri ri-palette-line icon-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Advance Dribble Base Visual Design</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill text-heading">2.5k Views</div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-danger"><i
                  class="icon-base ri ri-mic-fill icon-24px"></i></span>
            </div>
            <div class="d-sm-flex w-100 align-items-center">
              <div class="w-100 mb-2 mb-sm-0 me-sm-4">
                <h6 class="mb-0">Your First Singing Lesson</h6>
              </div>
              <div class="badge bg-label-secondary rounded-pill text-heading">948 Views</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Top Courses -->

  <!-- Upcoming Webinar -->
  <div class="col-12 col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="bg-label-primary text-center mb-6 pt-2 rounded-3">
          <img class="img-fluid w-px-150" src="{{ asset('assets/img/illustrations/sitting-girl-with-laptop.png') }}"
            alt="Card girl image" />
        </div>
        <h5 class="mb-1">Upcoming Webinar</h5>
        <p class="small mb-6">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
        <div class="row mb-6 g-4">
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-4">
                <span class="avatar-initial rounded bg-label-primary"><i
                    class="icon-base ri ri-calendar-line icon-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap fw-normal">17 Nov 23</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-4">
                <span class="avatar-initial rounded bg-label-primary"><i
                    class="icon-base ri ri-time-line icon-24px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap fw-normal">32 minutes</h6>
                <small>Duration</small>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary w-100">Join the event</a>
      </div>
    </div>
  </div>
  <!--/ Upcoming Webinar -->
  <!-- Assignment Progress -->
  <div class="col-12 col-xxl-4 col-md-6 order-0 order-sm-3 order-xxl-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Assignment Progress</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="assignProgress" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignProgress">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="primary" data-series="72" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">User experience Design</h6>
                  <p class="mb-0">120 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ri ri-arrow-right-s-line icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="success" data-series="48" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic fundamentals</h6>
                  <p class="mb-0">32 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ri ri-arrow-right-s-line icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">React native components</h6>
                  <p class="mb-0">182 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ri ri-arrow-right-s-line icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="info" data-series="24" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic of music theory</h6>
                  <p class="mb-0">56 Tasks</p>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="icon-base ri ri-arrow-right-s-line icon-20px scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Assignment Progress -->

  <!-- Timeline -->
  <div class="col-lg-6 col-xxl-8">
    <div class="card">
      <img src="{{ asset('assets/img/elements/activity-timeline.png') }}" alt="timeline-image"
        class="card-img-top h-px-200" style="object-fit: cover;" />
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i
            class="icon-base ri ri-bar-chart-2-line icon-24px text-body me-4"></i>Activity Timeline</h5>
      </div>
      <div class="card-body">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-body-secondary">12 min ago</small>
              </div>
              <p class="mb-2">Invoices have been paid to the company</p>
              <div class="d-flex align-items-center mb-1">
                <div class="badge bg-lighter rounded d-flex align-items-center">
                  <img src="{{ asset('assets/img/icons/misc/pdf.png') }}" alt="img" width="15" class="me-2" />
                  <span class="h6 mb-0 text-body">invoices.pdf</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-body-secondary">45 min ago</small>
              </div>
              <p class="mb-2">Project meeting with john @10:15am</p>
              <div class="d-flex justify-content-between flex-wrap gap-2">
                <div class="d-flex flex-wrap align-items-center">
                  <div class="avatar avatar-sm me-2">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                    <small>CEO of {{ config('variables.creatorName') }}</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class=" timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-body-secondary">2 Day Ago</small>
              </div>
              <p class="mb-2">6 team members in a project</p>
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                        title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="rounded-circle" src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                        title="Allen Rieske" class="avatar pull-up">
                        <img class="rounded-circle" src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                        title="Julee Rossignol" class="avatar pull-up">
                        <img class="rounded-circle" src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" />
                      </li>
                      <li class="avatar">
                        <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip"
                          data-bs-placement="bottom" title="3 more">+3</span>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Timeline -->
  <!-- Cafe Badilico -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <img class="card-img-top h-px-200" src="{{ asset('assets/img/elements/cafe-bg.png') }}" alt="cafe-bg"
        style="object-fit: cover;" />
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="mb-4">Cafe Badilico</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="cafeApp" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cafeApp">
              <a class="dropdown-item" href="javascript:void(0);">Edit Title</a>
              <a class="dropdown-item" href="javascript:void(0);">Edit Timings</a>
              <a class="dropdown-item" href="javascript:void(0);">Edit Description</a>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4 mb-4">
          <div class="icon-star-ratings" data-score="4" data-number="5"></div>
          <span class="mt-1">4 Star (12.4k)</span>
        </div>
        <p>Italian Cafe</p>
        <p class="border-bottom pb-4">The refrigerated dairy aisle of your local grocery store can be a great source
          tasty, convenient selections for your.</p>
        <p>Tonight’s availability</p>
        <span class="badge bg-label-secondary rounded-pill">5:30PM</span>
        <span class="badge bg-label-secondary rounded-pill mx-3">7:00PM</span>
        <span class="badge bg-label-secondary rounded-pill">7:15PM</span>
        <div class="mt-4">
          <a class="card-link" href="javascript:void(0);">Book Now</a>
        </div>
      </div>
    </div>
  </div>
  <!--/ Cafe Badilico -->
  <!-- Orders by Countries -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Orders by Countries</h5>
          <span class="text-body mb-0">62 deliveries in progress</span>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="ordersCountries" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ordersCountries">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill tabs-line border-bottom-0" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-new" aria-controls="navs-justified-new"
                aria-selected="true">New</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing"
                aria-selected="false">Preparing</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping"
                aria-selected="false">Shipping</button>
            </li>
          </ul>
          <div class="tab-content border-0 pb-0 px-6 mx-1">
            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Myrtle Ullrich</h6>
                    <p class="mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-2">Barry Schowalter</h6>
                    <p class="mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed mb-2"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Veronica Herman</h6>
                    <p class="mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-1">Helen Jacobs</h6>
                    <p class="mb-0 small">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Barry Schowalter</h6>
                    <p class="mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-2">Myrtle Ullrich</h6>
                    <p class="mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed mb-2 "></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Veronica Herman</h6>
                    <p class="mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-2">Helen Jacobs</h6>
                    <p class="mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Veronica Herman</h6>
                    <p class="mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-2">Barry Schowalter</h6>
                    <p class="mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed mb-2 "></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-checkbox-circle-line icon-20px text-success"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase fw-medium">sender</small>
                    </div>
                    <h6 class="mb-2">Myrtle Ullrich</h6>
                    <p class="mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-none">
                  <span class="timeline-indicator-advanced border-0 shadow-none">
                    <i class="icon-base ri ri-map-pin-line icon-20px text-primary"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase fw-medium">Receiver</small>
                    </div>
                    <h6 class="mb-2">Helen Jacobs</h6>
                    <p class="mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Orders by Countries -->
  <!-- Card DataTable -->
  <div class="col-xxl-8 order-5">
    <div class="card overflow-hidden">
      <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th class="text-truncate"># ID</th>
              <th class="text-truncate">Status</th>
              <th class="text-truncate">Client</th>
              <th class="text-truncate">Total</th>
              <th class="text-truncate">Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4910</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-success rounded-circle">
                    <i class="icon-base ri ri-check-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}" class="text-heading">Jordan
                        Stevenson</a></h6>
                    <small class="text-truncate">Layne_Kuvalis@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$3428</td>
              <td><span class="badge bg-label-success rounded-pill fw-normal">Paid</span></td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4909</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-success rounded-circle">
                    <i class="icon-base ri ri-check-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}"
                        class="text-heading">Richard
                        Payne</a></h6>
                    <small class="text-truncate">richard_payne@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$2872</td>
              <td class="text-heading">$883</td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4908</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-info rounded-circle">
                    <i class="icon-base ri ri-arrow-down-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}"
                        class="text-heading">Jennifer
                        Summers</a></h6>
                    <small class="text-truncate">jennifer_summers@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$4077</td>
              <td><span class="badge bg-label-success rounded-pill fw-normal">Paid</span></td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4907</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-secondary rounded-circle">
                    <i class="icon-base ri ri-mail-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}" class="text-heading">Mr.
                        Justin
                        Richardson</a></h6>
                    <small class="text-truncate">justin_richardson@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$2060</td>
              <td class="text-heading">$361</td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4906</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-warning rounded-circle">
                    <i class="icon-base ri ri-pie-chart-2-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}"
                        class="text-heading">Nicholas
                        Tanner</a></h6>
                    <small class="text-truncate">nicholas_tanner@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$3128</td>
              <td><span class="badge bg-label-success rounded-pill fw-normal">Paid</span></td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4905</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-secondary rounded-circle">
                    <i class="icon-base ri ri-mail-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}"
                        class="text-heading">Crystal
                        Mays</a></h6>
                    <small class="text-truncate">crystal_mays@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$2032</td>
              <td><span class="badge bg-label-success rounded-pill fw-normal">Paid</span></td>
            </tr>
            <tr>
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4904</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-success rounded-circle">
                    <i class="icon-base ri ri-check-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}" class="text-heading">Mary
                        Garcia</a></h6>
                    <small class="text-truncate">mary_garcia@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$2230</td>
              <td class="text-heading">-$253</td>
            </tr>
            <tr class="border-transparent">
              <td class="text-primary"><a href="{{ url('app/invoice/preview') }}">#4903</a></td>
              <td>
                <div class="avatar avatar-sm">
                  <div class="avatar-initial bg-label-info rounded-circle">
                    <i class="icon-base ri ri-arrow-down-line icon-16px"></i>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/8.png') }}" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <h6 class="mb-0 text-truncate"><a href="{{ url('pages/profile-user') }}" class="text-heading">Megan
                        Roberts</a></h6>
                    <small class="text-truncate">megan_roberts@gmail.com</small>
                  </div>
                </div>
              </td>
              <td class="text-truncate">$5612</td>
              <td><span class="badge bg-label-success rounded-pill fw-normal">Paid</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Card DataTable -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
<script type="module">
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>

@endsection