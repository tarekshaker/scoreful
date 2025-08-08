@extends('layouts/layoutMaster')

@section('title', 'Dashboard - CRM')


@section('vendor-style')
  @vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection
@section('page-style')
  @vite(['resources/assets/vendor/scss/pages/dashboards-crm.scss'])
@endsection
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/apex-charts/apexcharts.js', 'resources/assets/vendor/libs/cleave-zen/cleave-zen.js'])
@endsection
@section('page-script')
  @vite(['resources/assets/js/dashboards-crm.js'])
@endsection

@section('content')
  <div class="row g-6">
    <!-- Ratings -->
    <div class="col-xxl-3 col-sm-6">
      <div class="card">
        <div class="row">
          <div class="col-6">
            <div class="card-body">
              <div class="card-info">
                <h6 class="mb-4 pb-1 text-nowrap">Ratings</h6>
                <div class="d-flex align-items-center mb-3">
                  <h4 class="mb-0 me-2">13k</h4>
                  <p class="text-success mb-0">+15.6%</p>
                </div>
                <div class="badge bg-label-primary rounded-pill mb-xl-1">Year of 2021</div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="h-100 position-relative">
              <img src="{{ asset('assets/img/illustrations/illustration-1.png') }}" alt="Ratings"
                class="position-absolute card-img-position scaleX-n1-rtl bottom-0 w-auto end-0 me-3 me-xl-0 me-xxl-3 pe-2"
                width="95" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Ratings -->
    <!-- Sessions -->
    <div class="col-xxl-3 col-sm-6">
      <div class="card">
        <div class="row">
          <div class="col-6">
            <div class="card-body">
              <div class="card-info">
                <h6 class="mb-4 pb-1 text-nowrap">Sessions</h6>
                <div class="d-flex align-items-center mb-3">
                  <h4 class="mb-0 me-2">24.5k</h4>
                  <p class="text-danger mb-0">-20%</p>
                </div>
                <div class="badge bg-label-secondary rounded-pill mb-xl-1">Last Week</div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="h-100 position-relative">
              <img src="{{ asset('assets/img/illustrations/illustration-2.png') }}" alt="Ratings"
                class="position-absolute card-img-position scaleX-n1-rtl bottom-0 w-auto end-0 me-3 me-xl-0 me-xxl-3 pe-2"
                width="81" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Sessions -->
    <!-- Transactions -->
    <div class="col-xxl-6 align-self-end">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Transactions</h5>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                <a class="dropdown-item" href="javascript:void(0);">Update</a>
              </div>
            </div>
          </div>
          <p class="small mb-0"><span class="h6 mb-0">Total 48.5% Growth</span> 😎 this month</p>
        </div>
        <div class="card-body">
          <div class="row g-3">
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <div class="avatar-initial bg-primary rounded shadow-xs">
                    <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                  </div>
                </div>
                <div class="ms-3">
                  <p class="mb-0">Sales</p>
                  <h5 class="mb-0">245k</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <div class="avatar-initial bg-success rounded shadow-xs">
                    <i class="icon-base ri ri-group-line icon-24px"></i>
                  </div>
                </div>
                <div class="ms-3">
                  <p class="mb-0">Customers</p>
                  <h5 class="mb-0">12.5k</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <div class="avatar-initial bg-warning rounded shadow-xs">
                    <i class="icon-base ri ri-macbook-line icon-24px"></i>
                  </div>
                </div>
                <div class="ms-3">
                  <p class="mb-0">Product</p>
                  <h5 class="mb-0">1.54k</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <div class="avatar-initial bg-info rounded shadow-xs">
                    <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
                  </div>
                </div>
                <div class="ms-3">
                  <p class="mb-0">Revenue</p>
                  <h5 class="mb-0">$88k</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Transactions -->
    <!-- Total Sales Chart-->
    <div class="col-xxl-3 col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-1">Total Sales</h5>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="totalSalesDropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalSalesDropdown">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <p class="card-subtitle mb-0">$21,845</p>
        </div>
        <div class="card-body">
          <div id="totalSalesChart"></div>
        </div>
      </div>
    </div>
    <!--/ Total Sales Chart-->
    <!-- Revenue Report Chart-->
    <div class="col-xxl-3 col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-0">Revenue Report</h5>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="revenueReportDropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueReportDropdown">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div id="revenueReportChart"></div>
        </div>
      </div>
    </div>
    <!--/ Revenue Report Chart-->
    <!-- Sales Overview Chart -->
    <div class="col-xl-6">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-0">Sales Overview</h5>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="salesOverviewDropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverviewDropdown">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pt-lg-5">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div id="salesOverviewChart"></div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
              <div class="d-flex align-items-center">
                <div class="avatar">
                  <div class="avatar-initial bg-label-primary rounded">
                    <i class="icon-base ri ri-wallet-line icon-24px"></i>
                  </div>
                </div>
                <div class="ms-3 d-flex flex-column">
                  <p class="mb-0">Number of Sales</p>
                  <h5 class="mb-0">$86,400</h5>
                </div>
              </div>
              <hr class="my-6" />
              <div class="row g-4">
                <div class="col-6">
                  <div class="d-flex align-items-center mb-1">
                    <div class="badge badge-dot bg-primary me-2"></div>
                    <p class="mb-0">Apparel</p>
                  </div>
                  <p class="fw-medium mb-0">$12,150</p>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center mb-1">
                    <div class="badge badge-dot bg-primary me-2"></div>
                    <p class="mb-0">Electronic</p>
                  </div>
                  <p class="fw-medium mb-0">$24,900</p>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center mb-1">
                    <div class="badge badge-dot bg-primary me-2"></div>
                    <p class="mb-0">FMCG</p>
                  </div>
                  <p class="fw-medium mb-0">$12,750</p>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center mb-1">
                    <div class="badge badge-dot bg-primary me-2"></div>
                    <p class="mb-0">Other Sales</p>
                  </div>
                  <p class="fw-medium mb-0">$50,200</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Sales Overview Chart -->
    <!-- Activity Timeline -->
    <div class="col-xl-6 col-lg-8">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-0">Activity Timeline</h5>
          </div>
        </div>
        <div class="card-body pt-4">
          <ul class="timeline card-timeline mb-0">
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-3">
                  <h6 class="mb-0">12 Invoices have been paid</h6>
                  <small class="text-body-secondary">12 min ago</small>
                </div>
                <p class="mb-2">Invoices have been paid to the company</p>
                <div class="d-flex align-items-center mb-1">
                  <div class="badge bg-lightest">
                    <img src="{{ asset('assets//img/icons/misc/pdf.png') }}" alt="img" width="15"
                      class="me-2" />
                    <span class="h6 mb-0">invoices.pdf</span>
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
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-3">
                  <h6 class="mb-0">Create a new project for client</h6>
                  <small class="text-body-secondary">2 Day Ago</small>
                </div>
                <p class="mb-2">6 team members in a project</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap p-0">
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
                          <span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip"
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
    <!--/ Activity Timeline -->
    <!-- Weekly Sales Chart -->
    <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-0">Weekly Sales</h5>
            <div class="dropdown">
              <button class="btn text-body-secondary p-0" type="button" id="weeklySalesDropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-base ri ri-more-2-line icon-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <p class="text-body mb-0">Total 85.4k Sales</p>
        </div>
        <div class="card-body">
          <div id="weeklySalesChart"></div>
          <div class="d-flex align-items-center justify-content-around mt-5">
            <div class="d-flex align-items-center">
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-0">34.6k</h6>
                <p class="mb-0">Sales</p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded">
                  <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
                </div>
              </div>
              <div class="ms-3 d-flex flex-column">
                <h6 class="mb-0">$482k</h6>
                <p class="mb-0">Total Profit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Weekly Sales Chart -->
    <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-6">
      <div class="row gy-4">
        <!-- Total Growth chart -->
        <div class="col-12">
          <div class="card">
            <div class="card-header pb-0">
              <h4 class="mb-0">42.5k</h4>
            </div>
            <div class="card-body">
              <div id="totalGrowthAreaChart" class="mb-3"></div>
              <h6 class="text-center mb-0">Total Growth</h6>
            </div>
          </div>
        </div>
        <!--/ Total Growth chart -->
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div class="avatar">
                <div class="avatar-initial bg-primary rounded-circle shadow-xs">
                  <i class="icon-base ri ri-file-word-2-line icon-24px"></i>
                </div>
              </div>
              <div class="dropdown">
                <button class="btn text-body-secondary p-0" type="button" id="newProjectID" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-base ri ri-more-2-line icon-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-1">New Project</h6>
              <div class="d-flex flex-wrap mb-1 align-items-center">
                <h4 class="mb-0 me-2">862</h4>
                <p class="text-danger mb-0">-18%</p>
              </div>
              <small>Yearly Project</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Upgrade Plan -->
    <div class="col-xxl-4 col-xl-6 col-lg-8 col-md-6">
      <div class="card h-100">
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
            <a href="javascript:;" class="d-block my-2 small" data-bs-toggle="modal" data-bs-target="#addNewCCModal">
              Add Payment Method </a>
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
    <div class="col-xxl-4 col-md-6">
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
            <li class="d-flex mb-4 pb-2">
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
            <li class="d-flex mb-4 pb-2">
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
            <li class="d-flex mb-4 pb-2">
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
            <li class="d-flex mb-4 pb-2">
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
            <li class="d-flex mb-4 pb-2">
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
            <li class="d-flex">
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
    <!-- Developer Meetup -->
    <div class="col-xxl-4 col-md-6">
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
  </div>

  <!-- Modal -->
  @include('_partials/_modals/modal-add-new-cc')
  @include('_partials/_modals/modal-upgrade-plan')
  <!--/ Modal -->
@endsection
