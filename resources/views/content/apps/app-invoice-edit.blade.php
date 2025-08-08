@extends('layouts/layoutMaster')

@section('title', 'Edit - Invoice')

@section('vendor-style')
@vite('resources/assets/vendor/libs/flatpickr/flatpickr.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-invoice.scss')
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/cleave-zen/cleave-zen.js', 'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/offcanvas-add-payment.js', 'resources/assets/js/offcanvas-send-invoice.js', 'resources/assets/js/app-invoice-edit.js'])
@endsection

@section('content')
<div class="row invoice-edit">
  <!-- Invoice Edit-->
  <div class="col-lg-9 col-12 mb-lg-0 mb-6">
    <div class="card invoice-preview-card p-sm-12 p-6">
      <div class="card-body invoice-preview-header rounded p-6 px-3 text-heading">
        <div class="row mx-0 px-3">
          <div class="col-md-7 mb-md-0 mb-6 ps-0">
            <div class="d-flex svg-illustration align-items-center gap-3 mb-6">
              <span class="app-brand-logo demo">@include('_partials.macros')</span>
              <span class="mb-0 app-brand-text fw-semibold">{{ config('variables.templateName') }}</span>
            </div>
            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
            <p class="mb-1">San Diego County, CA 91905, USA</p>
            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
          </div>
          <div class="col-md-5 col-8 pe-0 ps-0 ps-md-2">
            <dl class="row mb-0 gx-4">
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-start">
                <span class="h5 text-capitalize mb-0 text-nowrap">Invoice</span>
              </dt>
              <dd class="col-sm-7">
                <div class="input-group input-group-sm input-group-merge disabled">
                  <span class="input-group-text">#</span>
                  <input type="text" class="form-control" disabled placeholder="74909" value="74909" id="invoiceId" />
                </div>
              </dd>
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-start">
                <span class="fw-normal text-nowrap">Date Issued:</span>
              </dt>
              <dd class="col-sm-7">
                <input type="text" class="form-control form-control-sm invoice-date" placeholder="YYYY-MM-DD" />
              </dd>
              <dt class="col-sm-5 d-md-flex align-items-center justify-content-start">
                <span class="fw-normal">Due Date:</span>
              </dt>
              <dd class="col-sm-7 mb-0">
                <input type="text" class="form-control form-control-sm due-date" placeholder="YYYY-MM-DD" />
              </dd>
            </dl>
          </div>
        </div>
      </div>

      <div class="card-body px-0">
        <div class="row my-1">
          <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-6">
            <h6>Invoice To:</h6>
            <div class="row">
              <div class="col-lg-6 col-md-8 col-12">
                <select class="form-select mb-4 w-auto">
                  <option value="Thomas shelby">Thomas shelby</option>
                  <option value="Wesley Burland">Wesley Burland</option>
                  <option value="Vladamir Koschek">Vladamir Koschek</option>
                  <option value="Tyne Widmore">Tyne Widmore</option>
                </select>
              </div>
            </div>
            <p class="mb-1">Shelby Company Limited</p>
            <p class="mb-1">Small Heath, B10 0HF, UK</p>
            <p class="mb-1">718-986-6062</p>
            <p class="mb-0">peakyFBlinders@gmail.com</p>
          </div>
          <div class="col-md-6 col-sm-7">
            <h6>Bill To:</h6>
            <table>
              <tbody>
                <tr>
                  <td class="pe-4">Total Due:</td>
                  <td>$12,110.55</td>
                </tr>
                <tr>
                  <td class="pe-4">Bank name:</td>
                  <td>American Bank</td>
                </tr>
                <tr>
                  <td class="pe-4">Country:</td>
                  <td>United States</td>
                </tr>
                <tr>
                  <td class="pe-4">IBAN:</td>
                  <td>ETD95476213874685</td>
                </tr>
                <tr>
                  <td class="pe-4">SWIFT code:</td>
                  <td>BR91905</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <hr class="mb-6 mt-1" />
      <div class="card-body pt-0 px-0">
        <form class="source-item">
          <div class="mb-4" data-repeater-list="group-a">
            <div class="repeater-wrapper pt-0 pt-md-9" data-repeater-item>
              <div class="d-flex border rounded position-relative pe-0">
                <div class="row w-100 p-5 gx-5">
                  <div class="col-md-7 col-12 mb-md-0 mb-3">
                    <h6 class="mb-2 repeater-title fw-medium">Item</h6>
                    <select class="form-select item-details mb-4">
                      <option value="App Design">App Design</option>
                      <option value="App Customization" selected>App Design</option>
                      <option value="ABC Template">ABC Template</option>
                      <option value="App Development">App Development</option>
                    </select>
                    <textarea class="form-control" rows="2">Customization & Bug Fixes</textarea>
                  </div>
                  <div class="col-md-2 col-12 mb-md-0 mb-5">
                    <h6 class="h6 repeater-title">Cost</h6>
                    <input type="text" class="form-control invoice-item-price mb-5" value="24" placeholder="24" min="12" />
                    <div class="d-flex flex-column gap-2 text-heading">
                      <span>Discount:</span>
                      <span>
                        <span class="discount me-2">0%</span>
                        <span class="tax-1 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                        <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-2 col-12 mb-md-0 mb-4">
                    <h6 class="h6 repeater-title">Qty</h6>
                    <input type="text" class="form-control invoice-item-qty" value="1" placeholder="1" min="1" max="50" />
                  </div>
                  <div class="col-md-1 col-12 pe-0">
                    <h6 class="h6 repeater-title">Price</h6>
                    <p class="mb-0 mt-2 text-heading">$24.00</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                  <i class="icon-base ri ri-close-line cursor-pointer icon-24px" data-repeater-delete></i>
                  <div class="dropdown">
                    <i class="icon-base ri ri-settings-3-line cursor-pointer more-options-dropdown icon-24px" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> </i>
                    <div class="dropdown-menu dropdown-menu-end w-px-300 p-4" aria-labelledby="dropdownMenuButton">
                      <div class="row g-3">
                        <div class="col-12">
                          <label for="discountInput" class="form-label">Discount(%)</label>
                          <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput1" class="form-label">Tax 1</label>
                          <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput2" class="form-label">Tax 2</label>
                          <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                      </div>
                      <div class="dropdown-divider my-4"></div>
                      <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-primary btn-sm" data-repeater-create><i class="icon-base ri ri-add-line icon-14px me-1"></i> Add Item</button>
            </div>
          </div>
        </form>
      </div>
      <hr class="my-1" />
      <div class="card-body px-0">
        <div class="row">
          <div class="col-md-6 mb-md-0 mb-3">
            <div class="d-flex align-items-center mb-4">
              <label for="salesperson" class="me-2 h6 mb-2">Salesperson:</label>
              <input type="text" class="form-control" id="salesperson" placeholder="Tommy Shelby" />
            </div>
            <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" />
          </div>
          <div class="col-md-6 d-flex justify-content-md-end mt-2">
            <div class="invoice-calculations">
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Subtotal:</span>
                <h6 class="mb-0">$5000.25</h6>
              </div>
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Discount:</span>
                <h6 class="mb-0">$00.00</h6>
              </div>
              <div class="d-flex justify-content-between mb-1">
                <span class="w-px-100">Tax:</span>
                <h6 class="mb-0">$100.00</h6>
              </div>
              <hr class="my-2" />
              <div class="d-flex justify-content-between">
                <span class="w-px-100">Total:</span>
                <h6 class="mb-0">$5100.25</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-1" />
      <div class="card-body px-0">
        <div class="row">
          <div class="col-12">
            <div>
              <label for="note" class="h6 mb-1 fw-normal">Note:</label>
              <textarea class="form-control" rows="2" id="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Edit-->

  <!-- Invoice Actions -->
  <div class="col-lg-3 col-12 invoice-actions">
    <div class="card mb-6">
      <div class="card-body">
        <button class="btn btn-primary d-grid w-100 mb-4" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="icon-base ri ri-send-plane-line icon-16px scaleX-n1-rtl me-1_5"></i>Send Invoice</span>
        </button>
        <div class="d-flex">
          <a href="{{ url('app/invoice/preview') }}" class="btn btn-outline-secondary w-100 me-4 mb-4">Preview</a>
          <button type="button" class="btn btn-outline-secondary w-100 mb-4">Save</button>
        </div>
        <button class="btn btn-success d-grid w-100" data-bs-toggle="offcanvas" data-bs-target="#addPaymentOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="icon-base ri ri-money-dollar-circle-line icon-16px scaleX-n1-rtl me-1_5"></i>Add Payment</span>
        </button>
      </div>
    </div>
    <div>
      <div class="form-floating form-floating-outline mb-6">
        <select class="form-select mb-6" id="select-payment-edit">
          <option value="Accept payments via">Accept payments via</option>
          <option value="Bank Account">Bank Account</option>
          <option value="Paypal">Paypal</option>
          <option value="Card">Credit/Debit Card</option>
          <option value="UPI Transfer">UPI Transfer</option>
        </select>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <label for="payment-terms" class="mb-0">Payment Terms</label>
        <div class="form-check form-switch mb-0 me-n2">
          <input type="checkbox" class="form-check-input" id="payment-terms" checked />
        </div>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <label for="client-notes" class="mb-0">Client Notes</label>
        <div class="form-check form-switch mb-0 me-n2">
          <input type="checkbox" class="form-check-input" id="client-notes" />
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <label for="payment-stub">Payment Stub</label>
        <div class="form-check form-switch me-n2">
          <input type="checkbox" class="form-check-input" id="payment-stub" />
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
@include('_partials/_offcanvas/offcanvas-add-payment')
<!-- /Offcanvas -->
@endsection