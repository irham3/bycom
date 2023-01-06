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
          <tr>
              <th class="py-4 category">RAK001</th>
              <td>
                  <div class="d-flex align-items-center komponen">
                      <div class="flex-shrink-0">
                          <img src="assets/image/keranjang/contoh.png" alt="...">
                      </div>
                      <div class="nama-komponen">
                          RAKITAN PC
                      </div>
                  </div>
              </td>
              <td class="py-4">Rp 10.000.000</td>
              <td class="py-3">
                  <div class="d-flex align-items-center komponen">
                      <a class="btn add" href="#" role="button"> View Details</a>
                  </div>
              </td>
          </tr>

          <tr>
              <th class="py-4 category">RAK002</th>
              <td>
                  <div class="d-flex align-items-center komponen">
                      <div class="flex-shrink-0">
                          <img src="assets/image/keranjang/contoh.png" alt="...">
                      </div>
                      <div class="nama-komponen">
                          PC GAMING
                      </div>
                  </div>
              </td>
              <td class="py-4">Rp 18.500.000</td>
              <td class="py-3">
                  <div class="d-flex align-items-center komponen">
                      <a class="btn add" href="#" role="button"> View Details</a>
                  </div>
              </td>
          </tr>
          
      </tbody>
  </table>
</section>
@endsection