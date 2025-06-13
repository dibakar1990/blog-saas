@extends('layouts.app')

@section('title')
   News Show
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
                @if($news->file_path != '')
                    <img src="{{ $news->file_path_url }}" alt="Banner image" class="rounded-top">
                @endif
            </div>
            <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-4">
                
                <div class="flex-grow-1 mt-3 mt-lg-5">
                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                    <div class="user-profile-info">
                    <h4 class="mb-2 mt-lg-6">{{ $news->category->name }}</h4>
                    <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                        <li class="list-inline-item">
                            @foreach ($news->tags as $index => $tag)
                                <span class="fw-medium">{{ $index + 1 }}.{{ $tag->name }}</span>
                            @endforeach
                            
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
        <!-- User Profile Content -->
        <div class="row">
        <div class="col-xl-12 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-12">
            <div class="card-body pt-3">
               {!! $news->description !!}
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
