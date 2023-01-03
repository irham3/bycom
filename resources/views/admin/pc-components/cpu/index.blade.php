@extends('admin.layouts.app')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div id="success_message"></div>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCPUModal">Add CPU</button>

      <p class="card-title mt-3">List CPU</p>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table table-hover expandable-table datatable" style="width:100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Url</th>
                  <th>Id Socket CPU</th>
                  <th>Jumlah Core</th>
                  <th>Core Clock</th>
                  <th>Boost Clock</th>
                  <th>TDP</th>
                  <th>Integrated Graphic</th>
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
@include('admin.pc-components.cpu._modal')

@endsection

@section('js-content')
@include('admin.pc-components.cpu._script')
@endsection

