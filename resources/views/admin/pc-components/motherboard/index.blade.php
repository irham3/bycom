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
                  <th>Nama Soket CPU</th>
                  <th>Tahun Diperkenalkan</th>
                  <th>Vendor CPU</th>
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

{{-- Add Modal --}}
@include('admin.pc-components.processor-socket._modal')

@endsection

@section('js-content')
@include('admin.pc-components.processor-socket._script')
@endsection

