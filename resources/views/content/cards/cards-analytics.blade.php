@extends('layouts/layoutMaster')

@section('title', 'Cards Analytics- UI elements')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/cards-analytics.js')
@endsection

@section('content')
<div class="row gy-6">
  <!-- Total Transactions & Report Chart -->
  <div class="col-12 col-xl-8">
    <div class="card h-100">
      <div class="row">
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
          <div class="card-body pt-3">
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
  <!-- Total Visitors Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Total Visitors</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="totalVisitorsDropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalVisitorsDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="totalVisitorsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Total Visitors Chart -->
  <!-- Weekly Sales Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Weekly Sales</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
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
  <!-- Total Revenue Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Total Revenue</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="totalRevenueDropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenueDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="totalRevenueChart"></div>
        <div class="d-flex justify-content-around mt-3">
          <div>
            <div class="d-flex align-items-center">
              <div class="badge badge-dot bg-success me-2 mb-1"></div>
              <h6 class="mb-0">856</h6>
            </div>
            <p class="mb-0">New User</p>
          </div>
          <div class="vr bg-light"></div>
          <div>
            <div class="d-flex align-items-center">
              <div class="badge badge-dot bg-primary me-2 mb-1"></div>
              <h6 class="mb-0">345</h6>
            </div>
            <p class="mb-0">Returning</p>
          </div>
          <div class="vr bg-light"></div>
          <div>
            <div class="d-flex align-items-center">
              <div class="badge badge-dot bg-warning me-2 mb-1"></div>
              <h6 class="mb-0">258</h6>
            </div>
            <p class="mb-0">Referrals</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue Chart -->
  <!-- Weekly Overview Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Weekly Overview</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="weeklyOverviewDropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
              <a class="dropdown-item" href="javascript:void(0);">Update</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body pt-lg-2">
        <div id="weeklyOverviewChart"></div>
        <div class="mt-1 mt-md-3">
          <div class="d-flex align-items-center gap-4">
            <h4 class="mb-0">45%</h4>
            <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
          </div>
          <div class="d-grid mt-3 mt-md-4">
            <button class="btn btn-primary" type="button">Details</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Weekly Overview Chart -->
  <!-- Performance Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Performance</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="performanceDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="performanceChart"></div>
      </div>
    </div>
  </div>
  <!--/ Performance Chart -->
  <!-- Analytics Chart -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Analytics</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="AnalyticsDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="AnalyticsDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <div id="AnalyticsChart"></div>
        <div class="d-flex align-items-center mt-3">
          <h6 class="mb-0">Revenue</h6>
          <div class="flex-grow-1"></div>
          <p class="me-4 mb-0">$845k</p>
          <h6 class="me-4 mb-0">82%</h6>
          <i class="icon-base ri ri-arrow-up-s-line text-success"></i>
        </div>
        <div class="d-flex align-items-center mt-3">
          <h6 class="mb-0">Transactions</h6>
          <div class="flex-grow-1"></div>
          <p class="me-4 mb-0">$12.5k</p>
          <h6 class="me-4 mb-0">52%</h6>
          <i class="icon-base ri ri-arrow-down-s-line text-danger"></i>
        </div>
        <div class="d-flex align-items-center mt-3">
          <h6 class="mb-0">Total Profit</h6>
          <div class="flex-grow-1"></div>
          <p class="me-4 mb-0">$27.6k</p>
          <h6 class="me-4 mb-0">42%</h6>
          <i class="icon-base ri ri-arrow-up-s-line text-success"></i>
        </div>
      </div>
    </div>
  </div>
  <!--/ Analytics Chart -->
  <!-- Sales State Chart-->
  <div class="col-xl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header pb-1">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Sales State</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="salesStateDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesStateDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <p class="text-body mb-0">Total $42,580 Sales</p>
      </div>
      <div id="salesStateChart" class="mt-auto"></div>
    </div>
  </div>
  <!--/ Sales State Chart-->
  <!-- Total Profit Chart-->
  <div class="col-xl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Total Profit</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="totalProfitDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body d-flex flex-column justify-content-between">
        <div id="totalProfitRadialBarChart"></div>
        <div class="text-center">
          <p class="mb-2">18k new sales</p>
          <div class="badge bg-label-primary rounded-pill">This Year</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Profit Chart-->
  <!-- Total Sales Chart-->
  <div class="col-xl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-1">Total Sales</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="totalSalesDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
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
  <!-- Total Visits Chart-->
  <div class="col-xl-3 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h5 class="mb-0">Total Visits</h5>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="totalVisitsDropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ri ri-more-2-line icon-24px"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalVisitsDropdown">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="totalVisitsChart"></div>
        <div class="text-center">
          <p class="small mb-2">42.2k new visits</p>
          <div class="badge bg-label-info rounded-pill">This Year</div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Visits Chart-->
  <!-- Revenue Report Chart-->
  <div class="col-xl-3 col-md-6">
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
  <!-- Activity Timeline -->
  <div class="col-lg-6">
    <div class="card">
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
                  <img src="{{ asset('assets/img/icons/misc/pdf.png') }}" alt="img" width="15" class="me-2" />
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
  <!-- Activity Timeline -->
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
            <div class="row g-6">
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

  <!-- Topic and Instructors -->
  <div class="col-12 col-lg-6 col-xl-7">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="topic" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-24px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
            <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body pt-2 row g-3">
        <div class="col-md-6">
          <div id="horizontalBarChart"></div>
        </div>
        <div class="col-md-6 d-flex justify-content-around align-items-center">
          <div>
            <div class="d-flex mb-10 align-items-baseline">
              <span class="text-primary me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">UI Design</p>
                <h5 class="mb-0">35%</h5>
              </div>
            </div>
            <div class="d-flex mb-10 align-items-baseline">
              <span class="text-success me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">Music</p>
                <h5 class="mb-0">14%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-danger me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">React</p>
                <h5 class="mb-0">10%</h5>
              </div>
            </div>
          </div>

          <div>
            <div class="d-flex mb-10 align-items-baseline">
              <span class="text-info me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">UX Design</p>
                <h5 class="mb-0">20%</h5>
              </div>
            </div>
            <div class="d-flex mb-10 align-items-baseline">
              <span class="text-secondary me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">Animation</p>
                <h5 class="mb-0">12%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-warning me-2"><i class="icon-base ri ri-circle-fill icon-12px"></i></span>
              <div>
                <p class="mb-0">SEO</p>
                <h5 class="mb-0">9%</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Topic and Instructors  End-->
  <!-- Shipment statistics-->
  <div class="col-lg-6 col-xl-5">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Shipment statistics</h5>
          <span class="text-body-secondary">Total number of deliveries 23.8k</span>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-primary">January</button>
          <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div id="shipmentStatisticsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Shipment statistics -->

  <!-- Reasons for delivery exceptions -->
  <div class="col-md-6 col-xxl-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
        </div>
        <div class="dropdown">
          <button class="btn text-body-secondary p-0" type="button" id="deliveryExceptions" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ri ri-more-2-line icon-20px"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="deliveryExceptionsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Reasons for delivery exceptions -->
  <!-- New Visitors -->
  <div class="col-md-6 col-xxl-4">
    <div class="row g-6">
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
              <div class="col-sm-6">
                <div id="newVisitorsChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <div>
                <h5 class="mb-1">Time Spendings</h5>
                <p class="mb-9">Weekly report</p>
              </div>
              <div class="time-spending-chart">
                <h5 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span></h5>
                <span class="badge bg-label-success rounded-pill">+18.4%</span>
              </div>
            </div>
            <div id="leadsReportChart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ New Visitors -->
</div>
@endsection