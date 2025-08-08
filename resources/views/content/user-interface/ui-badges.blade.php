@extends('layouts/layoutMaster')

@section('title', 'Badges - UI elements')

@section('content')
<div class="row g-6">
  <!-- Basic Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Basic Badges</h5>
      <div class="card-body">
        <div class="small fw-medium">Default</div>
        <div class="demo-inline-spacing">
          <span class="badge text-bg-primary">Primary</span>
          <span class="badge text-bg-secondary">Secondary</span>
          <span class="badge text-bg-success">Success</span>
          <span class="badge text-bg-danger">Danger</span>
          <span class="badge text-bg-warning">Warning</span>
          <span class="badge text-bg-info">Info</span>
          <span class="badge text-bg-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="small fw-medium">Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill text-bg-primary">Primary</span>
          <span class="badge rounded-pill text-bg-secondary">Secondary</span>
          <span class="badge rounded-pill text-bg-success">Success</span>
          <span class="badge rounded-pill text-bg-danger">Danger</span>
          <span class="badge rounded-pill text-bg-warning">Warning</span>
          <span class="badge rounded-pill text-bg-info">Info</span>
          <span class="badge rounded-pill text-bg-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Label Badges -->
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header">Label Badges</h5>
      <div class="card-body">
        <div class="small fw-medium">Label Default</div>

        <div class="demo-inline-spacing">
          <span class="badge bg-label-primary">Primary</span>
          <span class="badge bg-label-secondary">Secondary</span>
          <span class="badge bg-label-success">Success</span>
          <span class="badge bg-label-danger">Danger</span>
          <span class="badge bg-label-warning">Warning</span>
          <span class="badge bg-label-info">Info</span>
          <span class="badge bg-label-dark">Dark</span>
        </div>
      </div>
      <hr class="m-0" />
      <div class="card-body">
        <div class="small fw-medium">Label Pills</div>

        <div class="demo-inline-spacing">
          <span class="badge rounded-pill bg-label-primary">Primary</span>
          <span class="badge rounded-pill bg-label-secondary">Secondary</span>
          <span class="badge rounded-pill bg-label-success">Success</span>
          <span class="badge rounded-pill bg-label-danger">Danger</span>
          <span class="badge rounded-pill bg-label-warning">Warning</span>
          <span class="badge rounded-pill bg-label-info">Info</span>
          <span class="badge rounded-pill bg-label-dark">Dark</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Button with Badges -->
  <div class="col-lg">
    <div class="card">
      <h5 class="card-header">Button with Badges</h5>
      <div class="row row-bordered g-0">
        <div class="col-xl-4 p-6">
          <small class="fw-medium">Default</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-primary me-2">
              Text
              <span class="badge badge-center bg-white text-primary ms-1">4</span>
            </button>
            <button type="button" class="btn btn-primary me-2">
              Text
              <span class="badge badge-center bg-secondary rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>
        <div class="col-xl-4 p-6">
          <small class="fw-medium">Label</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-label-primary me-2">
              Text
              <span class="badge badge-center bg-white text-primary ms-1">4</span>
            </button>
            <button type="button" class="btn btn-label-primary me-2">
              Text
              <span class="badge badge-center bg-secondary rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>

        <div class="col-xl-4 p-6">
          <small class="fw-medium">Outline</small>
          <div class="demo-vertical-spacing">
            <button type="button" class="btn btn-outline-primary me-2">
              Text
              <span class="badge badge-center text-bg-primary ms-1">4</span>
            </button>
            <button type="button" class="btn btn-outline-secondary me-2">
              Text
              <span class="badge badge-center text-bg-secondary rounded-pill ms-1">4</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Badge Circle -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Badge Circle & Square Style</h5>
      <div class="row row-bordered g-0">
        <div class="col-lg-6 p-6">
          <h6>Basic</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill text-bg-primary">1</span>
              <span class="badge badge-center rounded-pill text-bg-secondary">2</span>
              <span class="badge badge-center rounded-pill text-bg-success">3</span>
              <span class="badge badge-center rounded-pill text-bg-danger">4</span>
              <span class="badge badge-center rounded-pill text-bg-warning">5</span>
              <span class="badge badge-center rounded-pill text-bg-info">6</span>
            </p>
            <p>
              <span class="badge badge-center text-bg-primary">1</span>
              <span class="badge badge-center text-bg-secondary">2</span>
              <span class="badge badge-center text-bg-success">3</span>
              <span class="badge badge-center text-bg-danger">4</span>
              <span class="badge badge-center text-bg-warning">5</span>
              <span class="badge badge-center text-bg-info">6</span>
            </p>
          </div>
        </div>
        <div class="col-lg-6 p-6">
          <h6>Label</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary">1</span>
              <span class="badge badge-center rounded-pill bg-label-secondary">2</span>
              <span class="badge badge-center rounded-pill bg-label-success">3</span>
              <span class="badge badge-center rounded-pill bg-label-danger">4</span>
              <span class="badge badge-center rounded-pill bg-label-warning">5</span>
              <span class="badge badge-center rounded-pill bg-label-info">6</span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary">1</span>
              <span class="badge badge-center bg-label-secondary">2</span>
              <span class="badge badge-center bg-label-success">3</span>
              <span class="badge badge-center bg-label-danger">4</span>
              <span class="badge badge-center bg-label-warning">5</span>
              <span class="badge badge-center bg-label-info">6</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Badge Circle with Icons -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Badge Circle & Square With Icon</h5>
      <div class="row row-bordered g-0">
        <div class="col-lg-6 p-6">
          <h6>Basic</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill text-bg-primary"><i class="icon-base ri ri-star-line"></i></span>
              <span class="badge badge-center rounded-pill text-bg-secondary"><i class="icon-base ri ri-notification-4-line"></i></span>
              <span class="badge badge-center rounded-pill text-bg-success"><i class="icon-base ri ri-check-line"></i></span>
              <span class="badge badge-center rounded-pill text-bg-danger"><i class="icon-base ri ri-money-dollar-circle-line"></i></span>
              <span class="badge badge-center rounded-pill text-bg-warning"><i class="icon-base ri ri-pie-chart-line"></i></span>
              <span class="badge badge-center rounded-pill text-bg-info"><i class="icon-base ri ri-funds-line"></i></span>
            </p>
            <p>
              <span class="badge badge-center text-bg-primary"><i class="icon-base ri ri-star-line"></i></span>
              <span class="badge badge-center text-bg-secondary"><i class="icon-base ri ri-notification-4-line"></i></span>
              <span class="badge badge-center text-bg-success"><i class="icon-base ri ri-check-line"></i></span>
              <span class="badge badge-center text-bg-danger"><i class="icon-base ri ri-money-dollar-circle-line"></i></span>
              <span class="badge badge-center text-bg-warning"><i class="icon-base ri ri-pie-chart-line"></i></span>
              <span class="badge badge-center text-bg-info"><i class="icon-base ri ri-funds-line"></i></span>
            </p>
          </div>
        </div>
        <div class="col-lg-6 p-6">
          <h6>Label</h6>
          <div class="small fw-medium mb-2">Default</div>
          <div class="demo-inline-spacing">
            <p>
              <span class="badge badge-center rounded-pill bg-label-primary"><i class="icon-base ri ri-star-line"></i></span>
              <span class="badge badge-center rounded-pill bg-label-secondary"><i class="icon-base ri ri-notification-4-line"></i></span>
              <span class="badge badge-center rounded-pill bg-label-success"><i class="icon-base ri ri-check-line"></i></span>
              <span class="badge badge-center rounded-pill bg-label-danger"><i class="icon-base ri ri-money-dollar-circle-line"></i></span>
              <span class="badge badge-center rounded-pill bg-label-warning"><i class="icon-base ri ri-pie-chart-line"></i></span>
              <span class="badge badge-center rounded-pill bg-label-info"><i class="icon-base ri ri-funds-line"></i></span>
            </p>
            <p>
              <span class="badge badge-center bg-label-primary"><i class="icon-base ri ri-star-line"></i></span>
              <span class="badge badge-center bg-label-secondary"><i class="icon-base ri ri-notification-4-line"></i></span>
              <span class="badge badge-center bg-label-success"><i class="icon-base ri ri-check-line"></i></span>
              <span class="badge badge-center bg-label-danger"><i class="icon-base ri ri-money-dollar-circle-line"></i></span>
              <span class="badge badge-center bg-label-warning"><i class="icon-base ri ri-pie-chart-line"></i></span>
              <span class="badge badge-center bg-label-info"><i class="icon-base ri ri-funds-line"></i></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dots -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Dots Style</h5>
      <div class="card-body d-sm-flex d-block">
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-primary me-1"></span> Primary</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-secondary me-1"></span> Secondary</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-success me-1"></span> Success</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-danger me-1"></span> Danger</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-warning me-1"></span> Warning</div>
        <div class="d-flex align-items-center lh-1 me-4 mb-4 mb-sm-0"><span class="badge badge-dot text-bg-info me-1"></span> Info</div>
      </div>
    </div>
  </div>

  <!-- Notifications -->
  <div class="col-lg">
    <div class="card">
      <h5 class="card-header">Button with Badges Notification</h5>
      <div class="card-body d-flex flex-wrap gap-4 mt-xl-4">
        <button type="button" class="btn btn-label-primary text-nowrap d-inline-flex position-relative me-4">
          Badge
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center text-bg-primary">2</span>
        </button>
        <button type="button" class="btn btn-warning text-nowrap d-inline-flex position-relative me-4">
          Label Badge
          <span class="position-absolute top-0 start-100 translate-middle badge bg-label-warning border border-warning">2</span>
        </button>
        <button type="button" class="btn btn-label-info text-nowrap d-inline-flex position-relative me-4">
          Pill
          <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill text-bg-info">2</span>
        </button>
        <button type="button" class="btn btn-label-danger text-nowrap d-inline-flex position-relative">
          Dot
          <span class="position-absolute top-0 start-100 translate-middle badge badge-dot border border-2 p-2 bg-danger"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="col-lg">
    <div class="card">
      <h5 class="card-header">Notifications With Icons</h5>
      <div class="card-body demo-inline-spacing gap-4">
        <div class="small fw-medium mt-0">Small badge notifications.</div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="icon-base ri ri-mail-line"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge bg-primary badge-notifications">6</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="icon-base ri ri-twitter-fill"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-info text-info badge-notifications">5</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="icon-base ri ri-notification-4-line"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-notifications">4</span>
        </div>
        <div class="text-nowrap d-inline-flex position-relative me-4">
          <span class="icon-base ri ri-facebook-circle-fill"></span>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger badge-dot"></span>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-6">
    <div class="col-lg">
      <div class="card">
        <h5 class="card-header">Badges Position</h5>
        <div class="card-body">
          <div class="small fw-medium mb-2">Position using utility classes like <code>top-*</code>, <code>start-*</code>, etc...</div>
          <div class="d-flex flex-wrap mt-4 gap-1">
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-center rounded-pill bg-primary">4</span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
              <span class="position-absolute top-100 start-0 translate-middle badge badge-center rounded-pill bg-primary">4</span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
              <span class="position-absolute top-100 start-100 translate-middle badge badge-center rounded-pill bg-primary">4</span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
              <span class="position-absolute top-0 start-0 translate-middle badge badge-center rounded-pill bg-primary">4</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card">
        <h5 class="card-header">Badge Overlaps for Shapes</h5>
        <div class="card-body">
          <div class="small fw-medium mb-2">Using <code>rounded-*</code> utilities for avatar & <code>.badge-dot</code> class for notification</div>
          <div class="demo-inline-spacing">
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-dot rounded-pill bg-primary"></span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-1" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-dot border rounded-pill bg-primary"></span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-2" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-dot p-2 rounded-pill bg-primary"></span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-dot rounded-pill bg-primary"></span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-3" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-dot p-2 border border-2 rounded-pill bg-primary"></span>
            </div>
            <div class="avatar d-inline-flex position-relative me-4">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
              <span class="position-absolute top-0 start-100 translate-middle badge badge-center border rounded-pill bg-primary">9</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-6">
    <div class="col-lg">
      <div class="card mb-lg-0">
        <h5 class="card-header">Maximum Values</h5>
        <div class="card-body pt-4">
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">99</span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">99+</span>
          </div>
          <div class="avatar d-inline-flex position-relative me-4">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">999+</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card">
        <h5 class="card-header">Custom label Badges</h5>
        <div class="card-body pt-4 d-flex flex-wrap gap-6">
          <div class="avatar d-inline-flex position-relative">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-primary">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-secondary">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <span class="avatar-initial rounded-circle bg-success">pi</span>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-success">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-danger">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-warning">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <span class="avatar-initial rounded-circle bg-info">pi</span>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-info">4</span>
          </div>
          <div class="avatar d-inline-flex position-relative">
            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-label-dark">4</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
