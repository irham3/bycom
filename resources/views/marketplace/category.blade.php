@extends('layouts.app')
@section('main-content')
<section class="d-flex justify-content-between">
  <!--Side Nav Marketplace-->
  @include('layouts.side-nav-marketplace')

  <div class="list-content container mt-5" style="margin: 0px 30px;">
      <form class="d-flex justify-content-end" role="search">
          <input class="form-control py-2" type="search" placeholder="Cari Komponen PC" aria-label="Search">
      </form>

      <div class="pt-5 pb-5" id="casing-pc">
          <div class="container d-flex justify-content-between">
              <h3>{{ $data->categoryName }}</h3>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px; flex-wrap: wrap;">
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                      <p class="card-text">Rp 420.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-2.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Aerocool Casing Carbonite</h5>
                      <p class="card-text">Rp 350.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                      <p class="card-text">Rp 420.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-2.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Aerocool Casing Carbonite</h5>
                      <p class="card-text">Rp 350.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                      <p class="card-text">Rp 420.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-2.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Aerocool Casing Carbonite</h5>
                      <p class="card-text">Rp 350.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
              <div class="card">
                  <center><img src="{{ url('images/marketplace/case-3.png') }}" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                      <a class="btn view" href="#" role="button">Add</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection