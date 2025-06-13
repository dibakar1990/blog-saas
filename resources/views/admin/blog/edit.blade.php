@extends('layouts.app')

@section('title')
    News Edit
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row fv-plugins-icon-container">
            <div class="col-md-12">
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">@yield('title')</h5>
                        
                        <small class="text-body float-end"><a href="{{ route('admin.dashboard') }}"> Dashboard</a> / <a href="{{ route('admin.news.index') }}">News</a></small>
                    </div>
                    <div class="card-body">
                        <form id="formNewsEdit" method="post" action="{{ route('admin.news.update',['news' => $news->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-1 g-5">
                                <div class="col-md-12 form-floating form-floating-outline mb-6">
                                    <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="name" name="news_title" value="{{ $news->title }}" placeholder="News title">
                                    <label for="name">News Title</label>
                                    @error('news_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <select class="form-select form-select-sm select2  @error('category') is-invalid @enderror" id="category_id" name="category" aria-label="Default select example">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $news->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                        
                                      </select>
                                    <label for="category_id">Category</label>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <span style="margin-right: 20px;">Popular News</span>
                                    <div class="form-check form-check-inline mt-4">
                                        <input class="form-check-input" type="radio" name="popular_news" id="inlineRadio1" value="1" {{ $news->popular_news == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-4">
                                        <input class="form-check-input" type="radio" name="popular_news" id="inlineRadio1" value="0" {{ $news->popular_news == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4 form-floating form-floating-outline mb-6">
                                    <span style="margin-right: 20px;">Latest News</span>
                                    <div class="form-check form-check-inline mt-4">
                                        <input class="form-check-input" type="radio" name="latest_news" id="latest_news_yes" value="1" {{ $news->latest_news == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="latest_news_yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-4">
                                        <input class="form-check-input" type="radio" name="latest_news" id="latest_news_no" value="0" {{ $news->latest_news == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="latest_news_no">No</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 form-floating form-floating-outline mb-6">
                                    <textarea class="form-control summernote" rows="5" name="description" id="description">{{ $news->description }}</textarea>
                                    <label for="name">News Description</label>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-floating form-floating-outline mb-6">
                                    <select class="form-select form-select-sm @error('tags') is-invalid @enderror" id="tag_id" name="tags[]" placeholder="Choose tags" aria-label="Default select example" data-allow-clear="1" multiple>
                                       @foreach ($tags as $tag)
                                        <option value="{{ $tag->id}}" {{ in_array($tag->id, old('tags', $exsistingTagIds ?? [])) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                       @endforeach
                                    </select>
                                    <label for="tag_id">Tags</label>
                                    @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-floating form-floating-outline mb-6">
                                    <div class="mb-4">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="file" id="formFile" onchange="document.getElementById('img_preview').src = window.URL.createObjectURL(this.files[0]);"
                                        accept="image/png, image/jpeg, image/jpg, image/svg">
                                      </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6 form-floating form-floating-outline" style="margin-bottom: 14px; margin-top: -20px;">
                                    <div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary">
                                        @if($news->file_path != '')
                                            <img src="{{ $news->file_path_url }}" id="img_preview" alt="no-image" class="rounded">
                                        @else
                                        <img src="{{asset('backend/assets/img/no-image.jpg')}}" id="img_preview" alt="no-image" class="rounded">
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="{{ asset('backend/assets/js/pages/blog/edit.js') }}"></script>

@endsection
