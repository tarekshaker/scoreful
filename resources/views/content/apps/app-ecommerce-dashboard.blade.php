@extends('layouts/layoutMaster')

@section('title', 'Dashboard - eCommerce')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-ecommerce-dashboard.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/app-ecommerce-dashboard.js')
@endsection

@section('content')
<div class="row gy-6">
  <!-- Congratulations card -->
  <div class="col-xl-8 col-lg-7 align-self-end mt-md-7 mt-lg-4 pt-md-2 pt-lg-0">
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
  <!--/ Congratulations card -->
  <!-- Cards with icon profit and loss info -->
  <div class="col-xl-4 col-lg-5">
    <div class="row g-6">
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-success rounded-circle shadow-xs">
                <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="revenueID" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Revenue</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">$95.2k</h4>
              <p class="text-success mb-0">+12%</p>
            </div>
            <small>Revenue Increase</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-info rounded-circle shadow-xs">
                <i class="icon-base ri ri-bank-card-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="transactionsID" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionsID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Transactions</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">1.2k</h4>
              <p class="text-success mb-0">+38%</p>
            </div>
            <small>Daily Transactions</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Cards with icon profit and loss info -->
  <!-- Total Profit Chart & Last month balance -->
  <div class="col-xl-8">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-md-7 pe-md-0">
          <div class="card-header">
            <h5 class="mb-0">Total Profit</h5>
          </div>
          <div class="card-body">
            <div id="totalProfitChart"></div>
          </div>
        </div>
        <div class="col-md-5 border-start ps-md-0">
          <hr class="d-block d-md-none my-0" />
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="mb-0">$482.85k</h5>
              <div class="dropdown">
                <button class="btn text-body-secondary p-0" type="button" id="totalProfit" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-base ri ri-more-2-line icon-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfit">
                  <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
              </div>
            </div>
            <p class="card-subtitle mb-0">Last month balance $234.40k</p>
          </div>
          <div class="card-body pt-7">
            <div class="d-flex align-items-center mb-4">
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded">
                  <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">$48,568.20</h6>
                <p class="mb-0">Total Profit</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4">
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="icon-base ri ri-wallet-line icon-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">$38,453.25</h6>
                <p class="mb-0">Total Income</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4">
              <div class="avatar">
                <div class="avatar-initial bg-label-secondary rounded">
                  <i class="icon-base ri ri-bank-card-line icon-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-1">$2,453.45</h6>
                <p class="mb-0">Total Expense</p>
              </div>
            </div>
            <div>
              <button class="btn btn-primary w-100" type="button">View Report</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Profit Chart & Last month balance -->
  <!-- three chart -->
  <div class="col-xl-4">
    <div class="row gy-6">
      <!-- Total Sales -->
      <div class="col-xl-12 col-md-6">
        <div class="card h-100">
          <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="me-3">
              <h5 class="mb-1">Total Sales</h5>
              <p class="mb-3">Calculated in last 7 days</p>
              <div class="d-flex align-items-center">
                <h4 class="mb-0 me-1">$25,980</h4>
                <p class="text-success mb-0"><i class="icon-base ri ri-arrow-up-s-line icon-24px"></i>15.6%</p>
              </div>
            </div>
            <div id="totalSalesDonutChart" class="mt-3 mt-md-0"></div>
          </div>
        </div>
      </div>
      <!-- Total Sales -->
      <!-- Total Revenue chart -->
      <div class="col-xl-6 col-md-3 col-sm-6">
        <div class="card">
          <div class="card-header pb-0">
            <h4 class="mb-0">$35.4k</h4>
          </div>
          <div class="card-body">
            <div id="totalRevenueChart" class="mb-3"></div>
            <h6 class="text-center mb-0">Total Revenue</h6>
          </div>
        </div>
      </div>
      <!--/ Total Revenue chart -->
      <!-- Total Sales chart -->
      <div class="col-xl-6 col-md-3 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h4 class="mb-0">135k</h4>
          </div>
          <div class="card-body">
            <div id="totalSalesSemiDonutChart" class="mb-4"></div>
            <h6 class="text-center mb-0">Total Sales</h6>
          </div>
        </div>
      </div>
      <!--/ Total Sales chart -->
    </div>
  </div>
  <!--/ three chart -->
  <!-- Transactions -->
  <div class="col-xxl-4 col-md-6 ">
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
  <!-- New visitors cards -->
  <div class="col-xxl-4 col-md-6 ">
    <div class="row gy-6">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-danger rounded-circle shadow-xs">
                <i class="icon-base ri ri-car-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="logisticsID" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="logisticsID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Logistics</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">44.10k</h4>
              <p class="text-success mb-0">+42%</p>
            </div>
            <small>Regional Logistics</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="avatar">
              <div class="avatar-initial bg-warning rounded-circle shadow-xs">
                <i class="icon-base ri ri-file-chart-line icon-24px"></i>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="reportsID" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="reportsID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-1">Reports</h6>
            <div class="d-flex flex-wrap mb-1 align-items-center">
              <h4 class="mb-0 me-2">268</h4>
              <p class="text-danger mb-0">-28%</p>
            </div>
            <small>System Bugs</small>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5 class="card-title m-0 me-2">New Visitors</h5>
          </div>
          <div class="card-body pt-0 pb-3">
            <div class="row align-items-center">
              <div class="col-sm-6 pe-xxl-5">
                <p class="mb-2">48% new visitors this week.</p>
                <div class="d-flex flex-wrap align-items-center">
                  <h4 class="mb-0 me-1">12,480</h4>
                  <p class="text-success mb-0">
                    <i class="icon-base ri ri-arrow-up-s-line icon-24px"></i>
                    <span>28</span>
                  </p>
                </div>
              </div>
              <div class="col-sm-6 mt-xl-n4">
                <div id="newVisitorsChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ New visitors cards -->
  <!-- Website Statistics -->
  <div class="col-xxl-4 col-md-6 ">
    <div class="card h-100">
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
      <div class="card-body d-block d-lg-flex flex-column justify-content-between pt-5 pt-lg-12 pt-xxl-5">
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
        </div>
      </div>
    </div>
  </div>
  <!--/ Website Statistics -->
  <!-- Card DataTable -->
  <div class="col-xxl-8 order-xxl-1 order-2">
    <div class="card overflow-hidden h-100">
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
                        class="text-heading">Richard Payne</a></h6>
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
                        class="text-heading">Jennifer Summers</a></h6>
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
                        Justin Richardson</a></h6>
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
                        class="text-heading">Nicholas Tanner</a></h6>
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
                        class="text-heading">Crystal Mays</a></h6>
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
  <!-- Meeting Schedule -->
  <div class="col-xxl-4 col-md-6 order-xxl-2 order-1">
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
                <h6 class="mb-1">Call with Woods</h6>
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
                <h6 class="mb-1">Conference call</h6>
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
                <h6 class="mb-1">Meeting with Mark</h6>
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
                <h6 class="mb-1">Meeting in Oakland</h6>
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
                <h6 class="mb-1">Call with hilda</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-success rounded-pill">Meditation</div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4 pb-2">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/7.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Meeting with hilda</h6>
                <small class="d-flex align-items-center">
                  <i class="icon-base ri ri-calendar-line icon-14px"></i>
                  <span class="ms-2">21 Jul | 08:20-10:30</span>
                </small>
              </div>
              <div class="badge bg-label-info rounded-pill">Meetup</div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="avatar" class="rounded-circle" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1">Meeting with Carl</h6>
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
</div>
@endsection