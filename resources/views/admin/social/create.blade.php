@extends('layouts.app')

@section('title')
    Social Link Create
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
                        
                        <small class="text-body float-end"><a href="{{ route('admin.dashboard') }}"> Dashboard</a> / <a href="{{ route('admin.socials.index') }}">Socials</a></small>
                    </div>
                    <div class="card-body">
                        <form id="formSocialCreate" method="post" action="{{ route('admin.socials.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-1 g-5">
                                <div class="col-md-6 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('social_name') is-invalid @enderror" id="social_name" name="social_name" placeholder="Social Name">
                                    <label for="name">Social Name</label>
                                    @error('social_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('social_link') is-invalid @enderror" id="social_link" name="social_link" placeholder="Social link">
                                    <label for="name">Social Link</label>
                                    @error('social_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
<script src="{{ asset('backend/assets/js/pages/social/create.js') }}"></script>

@endsection
