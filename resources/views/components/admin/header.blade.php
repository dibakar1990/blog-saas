<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar">
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="mdi mdi-menu mdi-24px"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  

  <ul class="navbar-nav flex-row align-items-center ms-auto">

    <!-- Notification -->
    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">
      <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <span class="ri-notification-2-line ri-22px"></span>
        <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end py-0">
        <li class="dropdown-menu-header border-bottom">
          <div class="dropdown-header d-flex align-items-center py-3">
            <h6 class="mb-0 me-auto">Notification</h6>
            <div class="d-flex align-items-center">
              <span class="badge rounded-pill bg-label-primary me-2">8 New</span>
              <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><span class="mdi mdi-email-open-outline"></span></a>
            </div>
          </div>
        </li>
        <li class="dropdown-notifications-list scrollable-container">
          <ul class="list-group list-group-flush">
            
            <li class="list-group-item list-group-item-action dropdown-notifications-item">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar">
                    <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1 small">Charles Franklin</h6>
                  <small class="mb-1 d-block text-body">Accepted your connection</small>
                  <small class="text-muted">12hr ago</small>
                </div>
                <div class="flex-shrink-0 dropdown-notifications-actions">
                  <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                  <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                </div>
              </div>
            </li>
            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar">
                    <img src="{{ asset('backend/assets/img/avatars/2.png') }}" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1 small">New Message ✉️</h6>
                  <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                  <small class="text-muted">1h ago</small>
                </div>
                <div class="flex-shrink-0 dropdown-notifications-actions">
                  <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                  <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                </div>
              </div>
            </li>
            <li class="list-group-item list-group-item-action dropdown-notifications-item">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar">
                    <span class="avatar-initial rounded-circle bg-label-success"><i class="ri-shopping-cart-2-line"></i></span>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1 small">Whoo! You have new order  </h6>
                  <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                  <small class="text-muted">1 day ago</small>
                </div>
                <div class="flex-shrink-0 dropdown-notifications-actions">
                  <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                  <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                </div>
              </div>
            </li>
            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar">
                    <img src="{{ asset('backend/assets/img/avatars/9.png') }}" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                  <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                  <small class="text-muted">2 days ago</small>
                </div>
                <div class="flex-shrink-0 dropdown-notifications-actions">
                  <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                  <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class="border-top">
          <div class="d-grid p-4">
            <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
              <small class="align-middle">View all notifications</small>
            </a>
          </div>
        </li>
      </ul>
    </li>
    <!--/ Notification -->

    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
          @if(Auth::user()->file_path != '')
          <img src="{{ Auth::user()->file_path_url }}" alt class="w-px-40 h-auto rounded-circle">
          @else
          <span class="avatar-initial rounded-circle bg-label-primary">{{ substr(Auth::user()->name, 0, 1) }}</span>
          @endif
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 me-2">
                <div class="avatar avatar-online">
                 
                  @if(Auth::user()->file_path != '')
                    <img src="{{ Auth::user()->file_path_url }}" alt class="w-px-40 h-auto rounded-circle">
                  @else
                    <span class="avatar-initial rounded-circle bg-label-primary">{{ substr(Auth::user()->name, 0, 1) }}</span>
                  @endif
                </div>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0 small">{{ Auth::user()->name }}</h6>
                <small class="text-muted">{{ Auth::user()->username }}</small>

              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
            <i class="ri-user-3-line ri-22px me-2"></i>
            <span class="align-middle">My Profile</span>
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="{{ route('admin.account.setting') }}">
            <i class="ri-settings-4-line ri-22px me-2"></i>
            <span class="align-middle">Settings</span>
          </a>
        </li>
        
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="d-grid px-4 pt-2 pb-1">
            <a class="btn btn-danger d-flex" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="mdi mdi-logout"></span>&nbsp;
               <small class="align-middle">Logout</small>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
    </li>
    <!--/ User -->
    


  </ul>
</div>
</nav>