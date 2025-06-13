<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="javascript:void:;" class="app-brand-link">
        <span class="app-brand-logo demo me-1">
          <span style="color: var(--bs-primary)">
              <img src="{{ asset('backend/assets/img/logo.png') }}" height="60" width="85" alt="logo">
          
          </span>
          
        </span>
        {{-- <span class="app-brand-text demo menu-text fw-semibold ms-2">{{get_setting()->app_title ? get_setting()->app_title : config('app.name')}}</span> --}}
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
          <div data-i18n="Dashboards">Dashboards</div>
        </a>
      </li>
      <!-- Blog Manage -->
      <li class="menu-header fw-medium mt-4"><span class="menu-header-text">News Manage</span></li>
      <li class="menu-item {{ (request()->is('admin/news*')) ? 'active' : '' }}">
        <a href="{{ route('admin.news.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ri-file-list-3-line ri-22px me-2"></i>
          <div data-i18n="Basic">News</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('admin/categories*')) ? 'active' : '' }}">
        <a href="{{ route('admin.categories.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ri-menu-search-line ri-22px me-2"></i>
          <div data-i18n="Basic">Categories</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('admin/tags*')) ? 'active' : '' }}">
        <a href="{{ route('admin.tags.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ri-hashtag ri-22px me-2"></i>
          <div data-i18n="Basic">Tags</div>
        </a>
      </li>

      <!-- Application Setting -->
      <li class="menu-header fw-medium mt-4"><span class="menu-header-text">Application Manage</span></li>
      <li class="menu-item {{ (request()->is('admin/news*')) ? 'active' : '' }}">
        <a href="{{ route('admin.setting.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ri-tools-line ri-22px me-2"></i>
          <div data-i18n="Basic">App Setting</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('admin/socials*')) ? 'active' : '' }}">
        <a href="{{ route('admin.socials.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ri-external-link-line ri-22px me-2"></i>
          <div data-i18n="Basic">Social Link</div>
        </a>
      </li>

      <!-- User Profile -->
      <li class="menu-header fw-medium mt-4"><span class="menu-header-text">User Profile</span></li>
      <li class="menu-item {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
        <a href="{{route('admin.profile.index')}}" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-account mdi-30px"></i>
          <div data-i18n="Basic">My Profile</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('admin/account*')) || (request()->is('admin/change*')) ? 'active' : '' }}">
        <a href="{{route('admin.account.setting')}}" class="menu-link">
          <i class="menu-icon tf-icons ri-settings-4-line ri-22px me-2"></i>
          <div data-i18n="Basic">Settings</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{route('logout')}}" class="menu-link" onclick="event.preventDefault(); document.getElementById('nav-logout-form').submit();">
          <i class="menu-icon tf-icons mdi mdi-logout mdi-30px"></i>
          <div data-i18n="Basic">Logout</div>
        </a>
        <form id="nav-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
     
    </ul>
  </aside>