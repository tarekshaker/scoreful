@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pricing - Front Pages')

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-pricing.scss'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/front-page-pricing.js'])
@endsection


@section('content')
<!-- Pricing Plans -->
<section class="section-py first-section-pt">
  <div class="container">
    <h2 class="text-center mb-2">Pricing Plans</h2>
    <p class="text-center text-body-secondary px-sm-12 mb-3"><span>All plans include 40+ advanced tools and features to
        boost your product.</span><br />Choose the best plan to fit your needs.</p>
    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5 mb-0 mb-md-4">
      <label class="switch switch-sm switch-primary ms-sm-12 ps-sm-12 me-0 mt-lg-3">
        <span class="switch-label fw-medium fs-6 text-body">Monthly</span>
        <input type="checkbox" class="switch-input price-duration-toggler" />
        <span class="switch-toggle-slider">
          <span class="switch-on"></span>
          <span class="switch-off"></span>
        </span>
        <span class="switch-label fw-medium fs-6 text-body">Annually</span>
      </label>
      <div class="mt-n5 ms-n10 ml-2 mb-8 d-none d-sm-flex align-items-center gap-2">
        <i class="icon-base ri ri-corner-left-down-fill icon-24px text-body-secondary scaleX-n1-rtl"></i>
        <span class="badge badge-sm bg-label-primary rounded-pill mb-3 px-3">Save up to 10%</span>
      </div>
    </div>

    <div class="pricing-plans row mx-0 gap-6">
      <!-- Basic -->
      <div class="col-lg mb-md-0 mb-6 px-0">
        <div class="card border rounded shadow-none">
          <div class="card-body pt-12">
            <div class="mt-3 mb-5 text-center">
              <img src="{{ asset('assets/img/illustrations/pricing-basic.png') }}" alt="Basic Image" height="100" />
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Basic</h4>
            <p class="text-center mb-5">A simple start for everyone</p>
            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                <h1 class="mb-0 text-primary">0</h1>
                <sub class="h6 pricing-duration mt-auto mb-2 text-body">/month</sub>
              </div>
            </div>

            <ul class="list-group ps-6 my-5 pt-4">
              <li class="mb-2">100 responses a month</li>
              <li class="mb-2">Unlimited forms and surveys</li>
              <li class="mb-2">Unlimited fields</li>
              <li class="mb-2">Basic form creation tools</li>
              <li class="mb-0">Up to 2 subdomains</li>
            </ul>
            <a href="{{ url('front-pages/payment') }}" class="btn btn-outline-success d-grid w-100">Your Current
              Plan</a>
          </div>
        </div>
      </div>

      <!-- Standard -->
      <div class="col-lg mb-md-0 mb-6 px-0">
        <div class="card border-primary border shadow-none">
          <div class="card-body position-relative pt-4">
            <div class="position-absolute end-0 me-6 top-0 mt-6">
              <span class="badge bg-label-primary rounded-pill">Popular</span>
            </div>
            <div class="my-5 pt-6 text-center">
              <img src="{{ asset('assets/img/illustrations/pricing-standard.png') }}" alt="Standard Image"
                height="100" />
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Standard</h4>
            <p class="text-center mb-5">For small to medium businesses</p>
            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                <h1 class="price-toggle price-yearly text-primary mb-0">7</h1>
                <h1 class="price-toggle price-monthly text-primary mb-0 d-none">9</h1>
                <sub class="h6 text-body pricing-duration mt-auto mb-1">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-body-secondary">USD 480/year</small>
            </div>

            <ul class="list-group ps-6 my-5 pt-4">
              <li class="mb-2">Unlimited responses</li>
              <li class="mb-2">Unlimited forms and surveys</li>
              <li class="mb-2">Instagram profile page</li>
              <li class="mb-2">Google Docs integration</li>
              <li class="mb-0">Custom “Thank you” page</li>
            </ul>
            <a href="{{ url('front-pages/payment') }}" class="btn btn-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>

      <!-- Enterprise -->
      <div class="col-lg px-0">
        <div class="card border rounded shadow-none">
          <div class="card-body pt-12">
            <div class="mt-3 mb-5 text-center">
              <img src="{{ asset('assets/img/illustrations/pricing-enterprise.png') }}" alt="Enterprise Image"
                height="100" />
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Enterprise</h4>
            <p class="text-center mb-5">Solution for big organizations</p>

            <div class="text-center">
              <div class="d-flex justify-content-center">
                <sup class="h6 pricing-currency mt-2 mb-0 me-1 text-body">$</sup>
                <h1 class="price-toggle price-yearly text-primary mb-0">16</h1>
                <h1 class="price-toggle price-monthly text-primary mb-0 d-none">19</h1>
                <sub class="h6 pricing-duration mt-auto mb-1 text-body">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-body-secondary">USD 960/year</small>
            </div>

            <ul class="list-group ps-6 my-5 pt-4">
              <li class="mb-2">PayPal payments</li>
              <li class="mb-2">Logic Jumps</li>
              <li class="mb-2">File upload with 5GB storage</li>
              <li class="mb-2">Custom domain support</li>
              <li class="mb-0">Stripe integration</li>
            </ul>
            <a href="{{ url('front-pages/payment') }}" class="btn btn-outline-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Plans -->
<!-- Pricing Free Trial -->
<section class="pricing-free-trial bg-label-primary">
  <div class="container">
    <div class="position-relative">
      <div class="d-flex justify-content-between flex-column-reverse flex-lg-row align-items-center py-12">
        <div class="text-center text-lg-start">
          <h4 class="text-primary mb-2">Still not convinced? Start with a 14-day FREE trial!</h4>
          <p class="text-body mb-6 mb-md-11">You will get full access to with all the features for 14 days.</p>
          <a href="{{ url('front-pages/payment') }}" class="btn btn-primary">Start 14-day free trial</a>
        </div>
        <!-- image -->
        <div class="text-center">
          <img src="{{ asset('assets/img/illustrations/girl-with-laptop.png') }}" class="img-fluid mb-3 mb-lg-0"
            width="202" alt="Api Key Image" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Free Trial -->
<!-- Plans Comparison -->
<section class="section-py pricing-plans-comparison">
  <div class="container">
    <div class="col-12 text-center mb-6">
      <h4 class="mb-2">Pick a plan that works best for you</h4>
      <p>Stay cool, we have a 48-hour money back guarantee!</p>
    </div>
    <div class="table-responsive border rounded">
      <table class="table table-striped text-center mb-0">
        <thead>
          <tr>
            <th scope="col">
              <p class="mb-0">Time</p>
            </th>
            <th scope="col">
              <p class="mb-1">Starter</p>
              <p class="small fw-normal mb-0 text-body">Free</p>
            </th>
            <th scope="col">
              <div class="d-flex d-flex justify-content-center align-items-center">
                <p class="mb-0 me-1">Pro</p>
                <span class="badge badge-center rounded-circle bg-primary">
                  <i class="icon-base ri ri-star-s-fill icon-14px text-white"></i>
                </span>
              </div>
              <p class="small fw-normal text-capitalize mb-0 text-body">$7.5/month</p>
            </th>
            <th scope="col">
              <p class="mb-1">Enterprise</p>
              <small class="fw-normal text-capitalize text-body">$16/month</small>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-heading">14-days free trial</td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">No user limit</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Product Support</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Email Support</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <span class="badge bg-label-primary badge-sm rounded-pill">Add-on Available</span>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Integrations</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Removal of Front branding</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <span class="badge bg-label-primary badge-sm rounded-pill">Add-on Available</span>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Active maintenance & support</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td class="text-heading">Data storage for 365 days</td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-close-circle-line icon-24px text-body"></i>
            </td>
            <td>
              <i class="icon-base ri ri-checkbox-circle-line icon-24px text-primary"></i>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <a href="{{ url('front-pages/payment') }}" class="btn text-nowrap btn-outline-primary">Choose Plan</a>
            </td>
            <td>
              <a href="{{ url('front-pages/payment') }}" class="btn text-nowrap btn-primary">Choose Plan</a>
            </td>
            <td>
              <a href="{{ url('front-pages/payment') }}" class="btn text-nowrap btn-outline-primary">Choose Plan</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!--/ Plans Comparison -->
<!-- FAQS -->
<section class="section-py pricing-faqs rounded-bottom bg-body">
  <div class="container">
    <div class="text-center mb-6">
      <h4 class="mb-2">FAQ's</h4>
      <p>Let us help answer the most common questions.</p>
    </div>
    <div id="faq" class="accordion">
      <div class="accordion-item">
        <h6 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="true"
            data-bs-target="#faq-1" aria-controls="faq-1">What counts towards the 100 responses limit?</button>
        </h6>

        <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faq">
          <div class="accordion-body">We count all responses submitted through all your forms in a month. If you already
            received 100 responses this month, you won’t be able to receive any more of them until next month when the
            counter resets.</div>
        </div>
      </div>

      <div class="accordion-item previous-active">
        <h6 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2"
            aria-expanded="false" aria-controls="faq-2">How do you process payments?</button>
        </h6>
        <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq">
          <div class="accordion-body">We accept Visa®, MasterCard®, American Express®, and PayPal®. So you can be
            confident that your credit card information will be kept safe and secure.</div>
        </div>
      </div>

      <div class="accordion-item active">
        <h6 class="accordion-header">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false"
            aria-controls="faq-3">What payment methods do you accept?</button>
        </h6>
        <div id="faq-3" class="accordion-collapse collapse show" data-bs-parent="#faq">
          <div class="accordion-body">2Checkout accepts all types of credit and debit cards.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h6 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4"
            aria-expanded="false" aria-controls="faq-4">Do you have a money-back guarantee?</button>
        </h6>
        <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq">
          <div class="accordion-body">Yes. You may request a refund within 30 days of your purchase without any
            additional explanations.</div>
        </div>
      </div>

      <div class="accordion-item">
        <h6 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-5"
            aria-expanded="false" aria-controls="faq-5">I have more questions. Where can I get help?</button>
        </h6>
        <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq">
          <div class="accordion-body">Please <a href="javascript:void(0);">contact</a> us if you have any other
            questions or concerns. We’re here to help!</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ FAQS -->

@endsection