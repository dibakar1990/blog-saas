@extends('layouts.app')

@section('title')
    My Profile
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Header -->
        <div class="row">
        <div class="col-12">
            <div class="card mb-6">
            <div class="user-profile-header-banner">
                <img src="{{ asset('backend/assets/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                    @if($user->file_path !='') 
                        <img src="{{ $user->file_path_url }}" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded user-profile-img"> 
                    @else 
                        <img src="{{ asset('backend/assets/img/no-image.jpg') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded user-profile-img"> 
                    @endif 
                </div>
                <div class="flex-grow-1 mt-3 mt-lg-5">
                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                    <div class="user-profile-info">
                    <h4 class="mb-2 mt-lg-6">{{ $user->name }}</h4>
                    <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                        <li class="list-inline-item">
                        <i class="ri-palette-line me-2 ri-24px"></i>
                        <span class="fw-medium">{{ ucfirst($user->role) }}</span>
                        </li>
                        <li class="list-inline-item">
                        <i class="ri-map-pin-line me-2 ri-24px"></i>
                        <span class="fw-medium"> {{ $user->location ?? null }}</span>
                        </li>
                        <li class="list-inline-item">
                        <i class="ri-calendar-line me-2 ri-24px"></i>
                        <span class="fw-medium"> Joined {{ Carbon\Carbon::parse($user->created_at)->format('F Y') }}</span>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!--/ Header -->
        <!-- Navbar pills -->
        <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
            <ul class="nav nav-pills flex-column flex-sm-row mb-6 gap-2 gap-lg-0">
                <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);">
                    <i class="ri-user-3-line me-1_5"></i>Profile </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!--/ Navbar pills -->
        <!-- User Profile Content -->
        <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-6">
            <div class="card-body">
                <small class="card-text text-uppercase text-muted small">About</small>
                <ul class="list-unstyled my-3 py-1">
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-user-3-line ri-24px"></i>
                    <span class="fw-medium mx-2">Full Name:</span>
                    <span>{{ $user->name }}</span>
                </li>
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-check-line ri-24px"></i>
                    <span class="fw-medium mx-2">Status:</span>
                    <span>{{ $user->status ? 'Active' : 'Inactive'}}</span>
                </li>
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-star-smile-line ri-24px"></i>
                    <span class="fw-medium mx-2">Role:</span>
                    <span>{{ ucfirst($user->role) }}</span>
                </li>

                <li class="d-flex align-items-center mb-4">
                    <i class="ri-flag-2-line ri-24px"></i>
                    <span class="fw-medium mx-2">Address:</span>
                    <span>{{ $user->location ?? null }}</span>
                </li>
                
                </ul>
                <small class="card-text text-uppercase text-muted small">Contacts</small>
                <ul class="list-unstyled my-3 py-1">
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-phone-line ri-24px"></i>
                    <span class="fw-medium mx-2">Contact:</span>
                    <span>{{ $user->phone }}</span>
                </li>
               
                <li class="d-flex align-items-center mb-2">
                    <i class="ri-mail-open-line ri-24px"></i>
                    <span class="fw-medium mx-2">Email:</span>
                    <span>{{ $user->email }}</span>
                </li>
                </ul>
            </div>
            </div>
            <!--/ About User -->
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-6">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">
                <i class="ri-bar-chart-2-line ri-24px text-body me-4"></i>Activity Timeline
                </h5>
            </div>
            <div class="card-body pt-3">
                <ul class="timeline card-timeline mb-0">
                @foreach($activites as $activity)
                    <li class="timeline-item timeline-item-transparent">
                        @if($activity->user_id != null)
                            <span class="timeline-point timeline-point-success"></span>
                        @else
                            <span class="timeline-point timeline-point-danger"></span>
                        @endif
                        
                        <div class="timeline-event">
                        <div class="timeline-header mb-3">
                            @if($activity->user_id != null)
                                <h6 class="mb-0">User Logged In</h6>
                            @else
                                <h6 class="mb-0">User Logged In failed</h6>
                            @endif
                            <small class="text-muted">{{ Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</small>
                        </div>
                        <p class="mb-2"> {{ $activity->user_activity }} with {{ $activity->user->name ?? 'Unkown User' }} @ {{ Carbon\Carbon::parse($activity->created_at)->format('h:i A') }} </p>
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <div class="d-flex flex-wrap align-items-center">
                            <div class="avatar avatar-sm me-2">
                                <img src="{{ asset('backend/assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                                <p class="mb-0 small fw-medium">{{ $activity->user->name ?? 'Unkown User' }}</p>
                                <small>{{ ucfirst($activity->user->role ?? 'Unkown Role') }} of {{ config('app.name')}}</small>
                            </div>
                            </div>
                        </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
            </div>
            <!--/ Activity Timeline -->
        </div>
        </div>
        <!--/ User Profile Content -->
    </div>
@endsection

@section('js')

@endsection
