<x-app-layout>
    @section('content')
      <div class="section-title container mt-5" style="border-bottom: 1px solid #000000;">
          <h3 class="pt-3 pb-3">Cube Gaming Bruks White - ATX</h3>
      </div>
  
      <section class="container d-flex justify-content-between mt-5 mb-5">
          <div class="gallery">
              <div class="container-gallery mb-4">
                  <!-- Close the image -->
                  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  
                  <!-- Expanded image -->
                  <img id="expandedImg" style="width: auto" src="assets/image/marketplace/case.png">
              </div>
  
              <div class="row-gallery d-flex">
                  <div class="column-img">
                      <center><img src="assets/image/marketplace/case.png" alt="Nature" onclick="myFunction(this);"></center>
                  </div>
                  <div class="column-img">
                      <center><img src="assets/image/marketplace/case-2.png" alt="Snow" onclick="myFunction(this);">
                      </center>
                  </div>
                  <div class="column-img">
                      <center><img src="assets/image/marketplace/case-3.png" alt="Mountains" onclick="myFunction(this);">
                      </center>
                  </div>
              </div>
          </div>
          <div class="detail-content container ms-3">
              <div class="container bg-blur mb-3 pt-3 pb-2">
                  <div class="d-flex justify-content-between">
                      <h5>Harga</h5>
                      <p><b>Rp 420.000</b></p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>Stok</h5>
                      <p>Tersedia <b>(20)</b></p>
                  </div>
              </div>
  
              <b>Spesifikasi Casing : </b>
              <div class="container bg-blur mt-3 mb-3 pt-3 pb-2">
                  <div class="d-flex justify-content-between">
                      <h5>Merk</h5>
                      <p>Cube Gaming</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>Warna</h5>
                      <p>Putih</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>Kompatibilitas</h5>
                      <p>ATX, M-ATX, ITX</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>Dimensi</h5>
                      <p>400mm x 195mm x 443mm</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>Max Panjang GPU</h5>
                      <p>340mm</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <h5>I/O Port</h5>
                      <p>1x Tombol Daya, Atur Ulang, 1x Usb, 3.0, 2x USB 2.0, Jack Audio 3.5mm</p>
                  </div>
              </div>
  
              <div class="d-flex justify-content-end btn-grup pt-2">
                  <a class="btn" href="#" role="button">Masukkan Keranjang</a>
                  <a class="btn tokopedia" href="#" role="button">Beli di Tokopedia</a>
              </div>
          </div>
      </section>
      <!--Page Content-->
    @endsection
</x-app-layout>