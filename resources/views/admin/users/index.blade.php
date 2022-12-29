@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div id="success_message"></div>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Add User</button>

          <p class="card-title mt-3">List User</p>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-hover expandable-table users-table" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Avatar</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
              </table>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>

{{-- Add Modal --}}
@include('admin.users._modal')

@endsection

@section('js-content')
@include('admin.users._script')
@endsection

