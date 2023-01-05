@extends('admin.layouts.app')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div id="success_message"></div>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">Add Data</button>

      <p class="card-title mt-3">List Data</p>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-hover expandable-table datatable" style="width:100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Gambar</th>
                  <th>Email User</th>
                  <th>Kode Rakitan</th>
                  <th>Nama Rakitan</th>
                  <th>Total Harga</th>
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

@include('admin.pc-builds._modal')

@endsection

@section('js-content')
@include('admin.pc-builds._script')
@endsection

