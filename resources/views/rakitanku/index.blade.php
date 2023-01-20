@extends('layouts.app')
@section('main-content')
<div class="section-title komponen container mt-5">
  <h3 class="pt-3 pb-3">DAFTAR RAKITANKU</h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5">
  <table class="table">
      <thead>
          <tr class="heading-table">
              <th scope="col"> 
                Kode Rakitan
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="<h5>Masukkan kode di url: /rakitanku/<b>kode-rakitan</b></h5>">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              </th>
              <th scope="col">Judul Rakitan</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($listRakitan as $rakitan)    
        <tr>
            <th class="py-4 category">{{ $rakitan->code }}</th>
            <td class="py-4 nama-komponen rakitanku">{{ $rakitan->name }}</td>
            <td class="py-4">{{ $rakitan->totalPrice }}</td>
            <td class="py-4 btn-view"><a class="btn add view-details" href="{{ url('rakitanku/'.$rakitan->code) }}" role="button"> View</a></td>
        </tr>
        @endforeach                  
      </tbody>
  </table>
</section>
@endsection
