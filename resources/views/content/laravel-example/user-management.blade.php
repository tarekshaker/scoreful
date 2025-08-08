@extends('layouts/layoutMaster')

@section('title', 'Users')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
'resources/assets/vendor/libs/select2/select2.scss',
'resources/assets/vendor/libs/@form-validation/form-validation.scss',
'resources/assets/vendor/libs/animate-css/animate.scss', 'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/moment/moment.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js', 'resources/assets/vendor/libs/cleave-zen/cleave-zen.js',
'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/js/laravel-user-management.js'])
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">{{ $totalUser }}</h4>
              <p class="text-success mb-1">(100%)</p>
            </div>
            <small class="mb-0">Total Users</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-primary rounded">
              <div class="icon-base ri ri-group-line icon-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Verified Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">{{ $verified }}</h4>
              <p class="text-success mb-1">(+95%)</p>
            </div>
            <small class="mb-0">Recent analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-danger rounded">
              <div class="icon-base ri ri-user-add-line icon-26px scaleX-n1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Duplicate Users</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">{{ $userDuplicates }}</h4>
              <p class="text-danger mb-1">(0%)</p>
            </div>
            <small class="mb-0">Recent analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-success rounded">
              <div class="icon-base ri ri-user-follow-line icon-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="me-1">
            <p class="text-heading mb-1">Verification Pending</p>
            <div class="d-flex align-items-center">
              <h4 class="mb-1 me-2">{{ $notVerified }}</h4>
              <p class="text-success mb-1">(+6%)</p>
            </div>
            <small class="mb-0">Recent analytics</small>
          </div>
          <div class="avatar">
            <div class="avatar-initial bg-label-warning rounded">
              <div class="icon-base ri ri-user-search-line icon-26px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h6 class="card-title mb-0">Filters</h6>
  </div>
  <div class="px-4 py-3">
    <div id="filters-row" class="row g-3 align-items-end">
      <div class="col-sm-6 col-md-4">
        <select id="user-country-filter" class="form-select" data-allow-clear="true" data-placeholder="Filter by country">
          <option value=""></option>
        </select>
      </div>
    </div>
  </div>
  <div class="card-datatable">
    <table class="datatables-users table">
      <thead>
        <tr>
          <th></th>
          <th>Id</th>
          <th>User</th>
          <th>Email</th>
          <th>Country</th>
          <th>Verified</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 h-100">
      <form class="add-new-user pt-0" id="addNewUserForm">
        <input type="hidden" name="id" id="user_id">
        <div class="form-floating form-floating-outline mb-5 form-control-validation">
          <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name"
            aria-label="John Doe" />
          <label for="add-user-fullname">Full Name</label>
        </div>
        <div class="form-floating form-floating-outline mb-5 form-control-validation">
          <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com"
            aria-label="john.doe@example.com" name="email" />
          <label for="add-user-email">Email</label>
        </div>
        <div class="form-floating form-floating-outline mb-5 form-control-validation">
          <input type="text" id="add-user-username" class="form-control" placeholder="johndoe" aria-label="johndoe" name="username" />
          <label for="add-user-username">Username</label>
        </div>
        <div class="form-floating form-floating-outline mb-5 form-control-validation">
          <select id="add-user-country" class="select2-icons form-select" name="country_code">
            <optgroup label="Countries">
            </optgroup>
          </select>
          <label for="add-user-country">Country</label>
        </div>
        <div class="form-floating form-floating-outline mb-5 form-control-validation">
          <select id="add-user-gender" class="select2-icons form-select" name="gender">
              <option value=""></option>
              <option value="male" data-icon="ri ri-men-line">Male</option>
              <option value="female" data-icon="ri ri-women-line">Female</option>
          </select>
          <label for="add-user-gender">Gender</label>
        </div>

        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection
