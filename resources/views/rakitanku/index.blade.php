@extends('layouts.app')
@section('main-content')
<div class="section-title komponen container mt-5">
  <h3 class="pt-3 pb-3">DAFTAR RAKITANKU</h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5">
  <table class="table">
      <thead>
          <tr class="heading-table">
              <th scope="col">Kode Rakitan</th>
              <th scope="col">Judul Rakitan</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($listRakitan as $rakitan)    
        <tr>
            <th class="py-4 category">RAK001</th>
            <td class="py-4 nama-komponen rakitanku">{{ $rakitan->name }}</td>
            <td class="py-4">{{ $rakitan->totalPrice }}</td>
            <td class="py-4 btn-view"><a class="btn add view-details" href="#" role="button"> View</a></td>
        </tr>
        @endforeach          
      </tbody>
  </table>
</section>
@endsection