@extends('layouts.app')

@section('title')
    Change Password
@endsection
@section('css')

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-12">
        <div class="nav-align-top">
          <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light" href="{{route('admin.account.setting') }}">
                <i class="ri-group-line me-1_5"></i> Account </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active waves-effect waves-light" href="javascript:void(0);">
                <i class="ri-lock-line me-1_5"></i> Security </a>
            </li>
          </ul>
        </div>
        <!-- Change Password -->
        <div class="card mb-6">
          <h5 class="card-header">Change Password</h5>
          <div class="card-body pt-1">
            <form id="formChangePassword" method="POST" action="{{ route('admin.update.password',['id' => $user->id]) }}" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
              @csrf
              <div class="row">
                <div class="mb-5 col-md-4 form-password-toggle fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="············">
                      <label for="currentPassword">Current Password</label>
                     
                    </div>
                    <span class="input-group-text cursor-pointer">
                      <i class="ri-eye-off-line ri-20px"></i>
                    </span>
                      @error('currentPassword')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <div class="col-md-4 form-password-toggle fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="············">
                      <label for="newPassword">New Password</label>
                     
                    </div>
                    <span class="input-group-text cursor-pointer">
                      <i class="ri-eye-off-line ri-20px"></i>
                    </span>
                    @error('newPassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <div class="col-md-4 form-password-toggle fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="············">
                      <label for="confirmPassword">Confirm New Password</label>
                     
                    </div>
                    <span class="input-group-text cursor-pointer">
                      <i class="ri-eye-off-line ri-20px"></i>
                    </span>
                    @error('confirmPassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
              </div>
              <h6 class="text-body">Password Requirements:</h6>
              <ul class="ps-4 mb-0">
                <li class="mb-2">Minimum <strong> 8 </strong> characters long - the more, the better</li>
                <li class="mb-2">At least <strong> uppercase and one lowercase</strong> character</li>
                <li>At least one <strong>number, symbol, or whitespace</strong> character</li>
              </ul>
              <div class="mt-6">
                <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
              </div>
              <input type="hidden">
            </form>
          </div>
        </div>
        <!--/ Change Password -->
        <!-- Recent Devices -->
        @if($activites)
          <div class="card mb-6">
            <h6 class="card-header">Recent Devices</h6>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-truncate">Browser</th>
                    <th class="text-truncate">Device</th>
                    <th class="text-truncate">Location</th>
                    <th class="text-truncate">Recent Activities</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($activites as $activity)
                  @php 
                    if($activity->platform == 'Linux' || $activity->platform == 'Windows'){
                      $icon = 'ri-macbook-line';
                    }else if($activity->platform == 'AndroidOS'){
                      $icon = 'ri-smartphone-line';
                    }else if($activity->platform == 'iPhone'){
                      $icon = 'ri-android-line';
                    }else if($activity->platform == 'MacOS'){
                      $icon = 'ri-mac-line';
                    }else{
                      $icon = 'ri-macbook-line';
                    }
                    
                  @endphp
                    <tr>
                      <td class="text-truncate text-heading">
                        <i class="{{$icon}} ri-20px text-warning me-3"></i>{{$activity->browser}} on {{$activity->platform}}
                      </td>
                      <td class="text-truncate">{{ $activity->device }}</td>
                      <td class="text-truncate">{{ $activity->location }}</td>
                      <td class="text-truncate">{{ Carbon\Carbon::parse($activity->created_at)->format('jS, F Y h:i A') }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        @endif
        <!--/ Recent Devices -->
      </div>
    </div>
  </div>
@endsection

@section('js')

<script src="{{ asset('backend/js/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages-account-settings-account.js') }}"></script>

@endsection
