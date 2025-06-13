@extends('layouts.app')

@section('title')
    App Setting
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row fv-plugins-icon-container">
            <div class="col-md-12">
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">@yield('title')</h5>
                        
                        <small class="text-body float-end"><a href="{{ route('admin.dashboard') }}"> Dashboard</a> / Setting</small>
                    </div>
                    <div class="card-body">
                        <form id="formSetting" method="post" action="{{ route('admin.setting.update',['setting' => $setting->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-1 g-5">
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('app_name') is-invalid @enderror" id="name" name="app_name" value="{{ $setting->app_name ?? null }}" placeholder="App Name">
                                    <label for="name">App Name</label>
                                    @error('app_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $setting->email ?? null }}" placeholder="Email">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $setting->phone ?? null }}" placeholder="Phone">
                                    <label for="phone">Phone</label>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ $setting->location ?? null }}" placeholder="Location">
                                    <label for="location">Location</label>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <div class="mb-4" style="margin-top: -28px;">
                                        <label for="formFile" class="form-label">Logo</label>
                                        <input class="form-control" type="file" name="file" id="formFile" onchange="document.getElementById('img_preview').src = window.URL.createObjectURL(this.files[0]);"
                                        accept="image/png, image/jpeg, image/jpg, image/svg">
                                    </div>
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <div class="mb-4" style="margin-top: -28px;">
                                        <label for="formFile" class="form-label">Fav Icon</label>
                                        <input class="form-control" type="file" name="fav_icon" id="formFile1" onchange="document.getElementById('img_preview_fav').src = window.URL.createObjectURL(this.files[0]);"
                                        accept="image/png, image/jpeg, image/jpg, image/svg">
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 form-floating form-floating-outline" style="margin-bottom: 14px; margin-top: -20px;">
                                    <div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary">
                                        @if($setting->file_path != '')
                                            <img src="{{ $setting->file_path_url }}" id="img_preview" alt="no-image" class="rounded">
                                        @else
                                        <img src="{{asset('backend/assets/img/no-image.jpg')}}" id="img_preview" alt="no-image" class="rounded">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline" style="margin-bottom: 14px; margin-top: -20px;">
                                    <div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary">
                                        @if($setting->fav_icon != '')
                                            <img src="{{ $setting->fav_icon_path }}" id="img_preview" alt="no-image" class="rounded">
                                        @else
                                        <img src="{{asset('backend/assets/img/no-image.jpg')}}" id="img_preview_fav" alt="no-image" class="rounded">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('backend/js/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/setting/create.js') }}"></script>

@endsection
