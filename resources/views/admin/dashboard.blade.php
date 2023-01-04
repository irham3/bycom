@extends('admin.layouts.app')
@section('content')
  {{-- <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome {{ Auth::guard('admin')->user()->name }}</h3>
        </div>
        <div class="col-12 col-xl-4">
          <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">      
          </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-md-6 mb-2 stretch-card">
        <div class="card shadow p-1 mb-5 card-light-blue">
          <div class="card-body">
            <p class="mb-4">Jumlah User</p>
            <p class="fs-30 mb-2">{{ $countData['user'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-2 stretch-card">
        <div class="card shadow p-1 mb-5 card-light-danger">
          <div class="card-body">
            <p class="mb-4">Total Komponen PC</p>
            <p class="fs-30 mb-2">{{ $countData['totalComponent'] }}</p>
          </div>
        </div>
      </div>
    </div>
    <h3>Stok Komponen PC</h3>
    <div class="row">
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">CPU</p>
            <p class="fs-30 mb-2">{{ $countData['cpu'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Motherboard</p>
            <p class="fs-30 mb-2">{{ $countData['mobo'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">GPU</p>
            <p class="fs-30 mb-2">{{ $countData['gpu'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 mb-lg-0 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Memory</p>
            <p class="fs-30 mb-2">{{ $countData['memory'] }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Power Supply</p>
            <p class="fs-30 mb-2">{{ $countData['psu'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Internal Storage</p>
            <p class="fs-30 mb-2">{{ $countData['storage'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 stretch-card">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body">
            <p class="mb-4">Casing PC</p>
            <p class="fs-30 mb-2">{{ $countData['case'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
