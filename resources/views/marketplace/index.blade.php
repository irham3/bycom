@extends('layouts.app')

@section('main-content')
<section class="d-flex justify-content-between">
  @include('layouts.side-nav-marketplace')

  <div class="list-content container" style="margin: 0px 30px;">
  <form class="d-flex justify-content-end" role="search">
      <input class="form-control py-3" type="search" placeholder="Cari Komponen PC" aria-label="Search">
  </form>

      <div class="pt-5 pb-5" id="casing-pc">
          <div class="container d-flex justify-content-between">
          <h3>Casing PC</h3>
          <a class="btn" href="view-all.html" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
              <div class="card">
                  <center><img src="images/marketplace/case.png" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                      <p class="card-text">Rp 420.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/case-2.png" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Aerocool Casing Carbonite</h5>
                      <p class="card-text">Rp 350.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/case-3.png" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/case-3.png" class="card-img-top" alt="..."></center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                  </div>
              </div>
          </div>
      </div>

      <div class="pt-5 pb-5" id="motherboard">
      <div class="container d-flex justify-content-between">
          <h3>Motherboard</h3>
          <a class="btn" href="#" role="button">Lihat Lainnya</a>
      </div>
      <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
          <div class="card">
              <center><img src="images/marketplace/motherboard.png" class="card-img-top" alt="..."></center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                  <p class="card-text">Rp 420.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/motherboard-2.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Aerocool Casing Carbonite</h5>
                  <p class="card-text">Rp 350.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/motherboard-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/motherboard-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
      </div>
      </div>

      <div class="pt-5 pb-5" id="cpu">
      <div class="container d-flex justify-content-between">
          <h3>CPU</h3>
          <a class="btn" href="#" role="button">Lihat Lainnya</a>
      </div>
      <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
          <div class="card">
              <center><img src="images/marketplace/cpu.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                  <p class="card-text">Rp 420.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/cpu-2.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Aerocool Casing Carbonite</h5>
                  <p class="card-text">Rp 350.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/cpu-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/cpu-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
      </div>
      </div>
      <div class="pt-5 pb-5" id="gpu">
          <div class="container d-flex justify-content-between">
              <h3>GPU</h3>
              <a class="btn" href="#" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
              <div class="card">
                  <center><img src="images/marketplace/gpu.png" class="card-img-top" alt="...">
                  </center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                      <p class="card-text">Rp 420.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/gpu-2.png" class="card-img-top" alt="...">
                  </center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">Aerocool Casing Carbonite</h5>
                      <p class="card-text">Rp 350.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/gpu-3.png" class="card-img-top" alt="...">
                  </center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                  </div>
              </div>
              <div class="card">
                  <center><img src="images/marketplace/gpu-3.png" class="card-img-top" alt="...">
                  </center>
                  <div class="card-body mt-3">
                      <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                      <p class="card-text">Rp 1.975.000</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="pt-5 pb-5" id="ram">
      <div class="container d-flex justify-content-between">
          <h3>RAM</h3>
          <a class="btn" href="#" role="button">Lihat Lainnya</a>
      </div>
      <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
          <div class="card">
              <center><img src="images/marketplace/ram.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                  <p class="card-text">Rp 420.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/ram-2.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Aerocool Casing Carbonite</h5>
                  <p class="card-text">Rp 350.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/ram-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/ram-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
      </div>
      </div>
      <div class="pt-5 pb-5" id="psu">
      <div class="container d-flex justify-content-between">
          <h3>PSU</h3>
          <a class="btn" href="#" role="button">Lihat Lainnya</a>
      </div>
      <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
          <div class="card">
              <center><img src="images/marketplace/psu.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Cube Gaming Bruks White - ATX</h5>
                  <p class="card-text">Rp 420.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/psu-2.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">Aerocool Casing Carbonite</h5>
                  <p class="card-text">Rp 350.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/psu-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
          <div class="card">
              <center><img src="images/marketplace/psu-3.png" class="card-img-top" alt="...">
              </center>
              <div class="card-body mt-3">
                  <h5 class="card-title">MSI MPG QUIETUDE 100S</h5>
                  <p class="card-text">Rp 1.975.000</p>
              </div>
          </div>
      </div>
      </div>
  </div>
</section>
@endsection