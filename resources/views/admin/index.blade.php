@extends('layouts.app')

@section('title')
    Dashboard
@endsection
@section('css')

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-4">
        
      <!-- Transactions -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-primary rounded shadow">
                      <i class="mdi mdi-trending-up mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Sales</div>
                    <h5 class="mb-0">245k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-success rounded shadow">
                      <i class="mdi mdi-account-outline mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Customers</div>
                    <h5 class="mb-0">12.5k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-warning rounded shadow">
                      <i class="mdi mdi-cellphone-link mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Product</div>
                    <h5 class="mb-0">1.54k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-info rounded shadow">
                      <i class="mdi mdi-currency-usd mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Revenue</div>
                    <h5 class="mb-0">$88k</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Transactions -->

      <!-- Weekly Overview Chart -->
      {{-- <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h5 class="mb-1">Weekly Overview</h5>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="weeklyOverviewDropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <i class="mdi mdi-dots-vertical mdi-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  <a class="dropdown-item" href="javascript:void(0);">Update</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div id="weeklyOverviewChart"></div>
            <div class="mt-1 mt-md-3">
              <div class="d-flex align-items-center gap-3">
                <h3 class="mb-0">45%</h3>
                <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
              </div>
              <div class="d-grid mt-3 mt-md-4">
                <button class="btn btn-primary" type="button">Details</button>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!--/ Weekly Overview Chart -->

      <!-- Total Earnings -->
      {{-- <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Total Earning</h5>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="totalEarnings"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="mdi mdi-dots-vertical mdi-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="mb-3 mt-md-3 mb-md-5">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">$24,895</h2>
                <span class="text-success ms-2 fw-medium">
                  <i class="mdi mdi-menu-up mdi-24px"></i>
                  <small>10%</small>
                </span>
              </div>
              <small class="mt-1">Compared to $84,325 last year</small>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-md-2">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('backend/assets/img/icons/misc/zipcar.png') }}" alt="zipcar" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Zipcar</h6>
                    <small>Vuejs, React & HTML</small>
                  </div>
                  <div>
                    <h6 class="mb-2">$24,895.65</h6>
                    <div class="progress bg-label-primary" style="height: 4px">
                      <div
                        class="progress-bar bg-primary"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-md-2">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('backend/assets/img/icons/misc/bitbank.png') }}" alt="bitbank" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Bitbank</h6>
                    <small>Sketch, Figma & XD</small>
                  </div>
                  <div>
                    <h6 class="mb-2">$8,6500.20</h6>
                    <div class="progress bg-label-info" style="height: 4px">
                      <div
                        class="progress-bar bg-info"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-md-3">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('backend/assets/img/icons/misc/aviato.png') }}" alt="aviato" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Aviato</h6>
                    <small>HTML & Angular</small>
                  </div>
                  <div>
                    <h6 class="mb-2">$1,2450.80</h6>
                    <div class="progress bg-label-secondary" style="height: 4px">
                      <div
                        class="progress-bar bg-secondary"
                        style="width: 75%"
                        role="progressbar"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}
      <!--/ Total Earnings -->

      <!-- Four Cards -->
      {{-- <div class="col-xl-4 col-md-6">
        <div class="row gy-4">
          <!-- Total Profit line chart -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h4 class="mb-0">$86.4k</h4>
              </div>
              <div class="card-body">
                <div id="totalProfitLineChart" class="mb-3"></div>
                <h6 class="text-center mb-0">Total Profit</h6>
              </div>
            </div>
          </div>
          <!--/ Total Profit line chart -->
          <!-- Total Profit Weekly Project -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="avatar">
                  <div class="avatar-initial bg-secondary rounded-circle shadow">
                    <i class="mdi mdi-poll mdi-24px"></i>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="totalProfitID"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
                </div>
              </div>
              <div class="card-body mt-mg-1">
                <h6 class="mb-2">Total Profit</h6>
                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                  <h4 class="mb-0 me-2">$25.6k</h4>
                  <small class="text-success mt-1">+42%</small>
                </div>
                <small>Weekly Project</small>
              </div>
            </div>
          </div>
          <!--/ Total Profit Weekly Project -->
          <!-- New Yearly Project -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header d-flex align-items-center justify-content-between">
                <div class="avatar">
                  <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                    <i class="mdi mdi-wallet-travel mdi-24px"></i>
                  </div>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="newProjectID"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
                </div>
              </div>
              <div class="card-body mt-mg-1">
                <h6 class="mb-2">New Project</h6>
                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                  <h4 class="mb-0 me-2">862</h4>
                  <small class="text-danger mt-1">-18%</small>
                </div>
                <small>Yearly Project</small>
              </div>
            </div>
          </div>
          <!--/ New Yearly Project -->
          <!-- Sessions chart -->
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h4 class="mb-0">2,856</h4>
              </div>
              <div class="card-body">
                <div id="sessionsColumnChart" class="mb-3"></div>
                <h6 class="text-center mb-0">Sessions</h6>
              </div>
            </div>
          </div>
          <!--/ Sessions chart -->
        </div>
      </div> --}}
      <!--/ Total Earning -->

      <!-- Sales by Countries -->
      {{-- <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Sales by Countries</h5>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="saleStatus"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="mdi mdi-dots-vertical mdi-24px"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <div class="avatar-initial bg-label-success rounded-circle">US</div>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0">$8,656k</h6>
                    <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                    <small class="text-success">25.8%</small>
                  </div>
                  <small>United states of america</small>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-0">894k</h6>
                <small>Sales</small>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0">$2,415k</h6>
                    <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                    <small class="text-danger">6.2%</small>
                  </div>
                  <small>United Kingdom</small>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-0">645k</h6>
                <small>Sales</small>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0">865k</h6>
                    <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                    <small class="text-success"> 12.4%</small>
                  </div>
                  <small>India</small>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-0">148k</h6>
                <small>Sales</small>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0">$745k</h6>
                    <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                    <small class="text-danger">11.9%</small>
                  </div>
                  <small>Japan</small>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-0">86k</h6>
                <small>Sales</small>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-1">
                    <h6 class="mb-0">$45k</h6>
                    <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                    <small class="text-success">16.2%</small>
                  </div>
                  <small>Korea</small>
                </div>
              </div>
              <div class="text-end">
                <h6 class="mb-0">42k</h6>
                <small>Sales</small>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!--/ Sales by Countries -->

      <!-- Deposit / Withdraw -->
      {{-- <div class="col-xl-8">
        <div class="card h-100">
          <div class="card-body row g-2">
            <div class="col-12 col-md-6 card-separator pe-0 pe-md-3">
              <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <h5 class="m-0 me-2">Deposit</h5>
                <a class="fw-medium" href="javascript:void(0);">View all</a>
              </div>
              <div class="pt-2">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/gumroad.png') }}"
                        class="img-fluid"
                        alt="gumroad"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Gumroad Account</h6>
                        <small>Sell UI Kit</small>
                      </div>
                      <h6 class="text-success mb-0">+$4,650</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/mastercard-2.png') }}"
                        class="img-fluid"
                        alt="mastercard"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Mastercard</h6>
                        <small>Wallet deposit</small>
                      </div>
                      <h6 class="text-success mb-0">+$92,705</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/stripes.png') }}"
                        class="img-fluid"
                        alt="stripes"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Stripe Account</h6>
                        <small>iOS Application</small>
                      </div>
                      <h6 class="text-success mb-0">+$957</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/american-bank.png') }}"
                        class="img-fluid"
                        alt="american"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">American Bank</h6>
                        <small>Bank Transfer</small>
                      </div>
                      <h6 class="text-success mb-0">+$6,837</h6>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/citi.png') }}"
                        class="img-fluid"
                        alt="citi"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Bank Account</h6>
                        <small>Wallet deposit</small>
                      </div>
                      <h6 class="text-success mb-0">+$446</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-md-6 ps-0 ps-md-3 mt-3 mt-md-2">
              <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <h5 class="m-0 me-2">Withdraw</h5>
                <a class="fw-medium" href="javascript:void(0);">View all</a>
              </div>
              <div class="pt-2">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/brands/google.png') }}"
                        class="img-fluid"
                        alt="google"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Google Adsense</h6>
                        <small>Paypal deposit</small>
                      </div>
                      <h6 class="text-danger mb-0">-$145</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/brands/github.png') }}"
                        class="img-fluid"
                        alt="github"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Github Enterprise</h6>
                        <small>Security &amp; compliance</small>
                      </div>
                      <h6 class="text-danger mb-0">-$1870</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/brands/slack.png') }}"
                        class="img-fluid"
                        alt="slack"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Upgrade Slack Plan</h6>
                        <small>Debit card deposit</small>
                      </div>
                      <h6 class="text-danger mb-0">$450</h6>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center pb-2">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/payments/digital-ocean.png') }}"
                        class="img-fluid"
                        alt="digital"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Digital Ocean</h6>
                        <small>Cloud Hosting</small>
                      </div>
                      <h6 class="text-danger mb-0">-$540</h6>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                      <img
                        src="{{ asset('backend/assets/img/icons/brands/aws.png') }}"
                        class="img-fluid"
                        alt="aws"
                        height="30"
                        width="30" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">AWS Account</h6>
                        <small>Choosing a Cloud Platform</small>
                      </div>
                      <h6 class="text-danger mb-0">-$21</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Deposit / Withdraw -->

      <!-- Data Tables -->
      {{-- <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table">
              <thead class="table-light">
                <tr>
                  <th class="text-truncate">User</th>
                  <th class="text-truncate">Email</th>
                  <th class="text-truncate">Role</th>
                  <th class="text-truncate">Age</th>
                  <th class="text-truncate">Salary</th>
                  <th class="text-truncate">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                        <small class="text-truncate">@amiccoo</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">susanna.Lind57@gmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-laptop mdi-24px text-danger me-1"></i> Admin
                  </td>
                  <td class="text-truncate">24</td>
                  <td class="text-truncate">34500$</td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                        <small class="text-truncate">@brossiter15</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                  </td>
                  <td class="text-truncate">29</td>
                  <td class="text-truncate">64500$</td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                        <small class="text-truncate">@bemblinf</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">milo86@hotmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-cog-outline text-warning mdi-24px me-1"></i> Author
                  </td>
                  <td class="text-truncate">44</td>
                  <td class="text-truncate">94500$</td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                        <small class="text-truncate">@bbinerh</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">lonnie35@hotmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                  </td>
                  <td class="text-truncate">19</td>
                  <td class="text-truncate">4500$</td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                        <small class="text-truncate">@bkrabbe1d</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-chart-donut mdi-24px text-success me-1"></i> Maintainer
                  </td>
                  <td class="text-truncate">22</td>
                  <td class="text-truncate">10500$</td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                        <small class="text-truncate">@brosebothamz</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                  </td>
                  <td class="text-truncate">50</td>
                  <td class="text-truncate">99500$</td>
                  <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                        <small class="text-truncate">@bkildayr</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">otho21@gmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                  </td>
                  <td class="text-truncate">23</td>
                  <td class="text-truncate">23500$</td>
                  <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                </tr>
                <tr class="border-transparent">
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-sm me-3">
                        <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div>
                        <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                        <small class="text-truncate">@bgallemore6</small>
                      </div>
                    </div>
                  </td>
                  <td class="text-truncate">florencio.Little@hotmail.com</td>
                  <td class="text-truncate">
                    <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                  </td>
                  <td class="text-truncate">33</td>
                  <td class="text-truncate">20500$</td>
                  <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> --}}
      <!--/ Data Tables -->
    </div>
  </div>
@endsection

@section('js')
 
@endsection