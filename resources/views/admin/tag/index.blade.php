@extends('layouts.app')

@section('title')
    Tags
@endsection
@section('css')

  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatable/css/datatables.bootstrap5.css') }}"/>
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatable/css/datatables.checkboxes.css') }}"/>
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatable/css/buttons.bootstrap5.css') }}"/>
  <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/datatable/css/rowgroup.bootstrap5.css') }}"/>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">@yield('title')</span></h4>
        <div class="card">
            <div class="card-header flex-column flex-md-row">               
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                  <div class="dt-buttons btn-group flex-wrap">
                    <div class="btn-group" id="dataTable-button"></div>
                    
                    <a href="{{ route('admin.tags.create') }}" class="btn btn-secondary create-new btn-primary waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                      <span>
                        <i class="ri-add-line"></i>
                        <span class="d-none d-sm-inline-block">Add New</span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="head-label">
                  <div class="row">
                    <div class="col-md-2">
                      <select class="form-select form-select-sm select2" id="filter_status" name="status" aria-label="Default select example">
                        <option value="">Status Search</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <input id="searchbox" class="form-control form-control-sm" type="search" placeholder="Search.......">
                      
                    </div>
                  </div>
                </div>
              </div>
            <div class="table-responsive text-nowrap">
              <table class="table table-responsive" id="dataTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('backend/assets/vendor/libs/datatable/js/datatables-bootstrap5.js') }}"></script>

<x-admin.datatable.tag-datatable />
<x-admin.delete.delete-confirm />
<x-admin.status.status-change />

@endsection