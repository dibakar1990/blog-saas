@extends('layouts.app')

@section('title')
    Account Setting
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row fv-plugins-icon-container">
        <div class="col-md-12">
            <div class="nav-align-top">
            <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
                <li class="nav-item">
                <a class="nav-link active waves-effect waves-light" href="javascript:void(0);">
                    <i class="ri-group-line me-1_5"></i>Account </a>
                </li>
                <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="{{ route('admin.change.password') }}">
                    <i class="ri-lock-line me-1_5"></i>Security </a>
                </li>
            </ul>
            </div>
            <div class="card mb-6">
            <!-- Account -->
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-6">
                @if($user->file_path !='')
                    <img src="{{ $user->file_path_url }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
                @else
                <img src="{{ asset('backend/assets/img/no-image.jpg') }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
                @endif
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-sm btn-primary me-3 mb-4 waves-effect waves-light" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="ri-upload-2-line d-block d-sm-none"></i>
                    
                    </label>
                    <button type="button" class="btn btn-sm btn-outline-danger account-image-reset mb-4 waves-effect">
                    <i class="ri-refresh-line d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                    </button>
                    <div>Allowed JPG, JPEG or PNG.</div>
                </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <form id="formAccountSettings" method="POST" action="{{ route('admin.profile.update',['profile' => $user->id]) }}" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row mt-1 g-5">
                    <div class="col-md-6 fv-plugins-icon-container">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" autofocus="">
                        <label for="name">Name</label>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}" placeholder="Enter email">
                        <label for="email">E-mail</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                            <input type="text" id="userName" name="userName" class="form-control" value="{{ $user->username }}" placeholder="User name">
                            <label for="userName">User Name</label>
                            @error('userName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            </div>
                            
                        </div>
                        </div>
                    <div class="col-md-6">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="202 555 0111">
                        <label for="phone">Phone Number</label>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                        </div>
                        
                    </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                </div>
                <input type="file" id="upload" class="account-file-input" name="file" hidden="" accept="image/png, image/jpeg,image/jpeg">
                </form>
            </div>
            <!-- /Account -->
            </div>
        </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('backend/assets/js/pages-account-settings-account.js') }}"></script>
<script src="{{ asset('backend/js/jquery-validation/jquery.validate.min.js') }}"></script>

@endsection
