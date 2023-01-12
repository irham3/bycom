<div class="side-nav">
  <div class="side-box container pt-5" style="padding-left: 50px;">
      <div class="kategori">
          <b>Kategori</b>
          <ul>
            <li class="nav-item {{ (request()->is('marketplace')) ? 'active' : '' }}">
                <a href="{{ url('marketplace') }}">Lihat Semua</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/cpus')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/cpus') }}">CPU</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/cases')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/cases') }}">Casing PC</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/motherboards')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/motherboards') }}">Motherboard</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/gpus')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/gpus') }}">GPU</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/memories')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/memories') }}">Memory</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/power_supplies')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/power_supplies') }}">Power Supply (PSU)</a>
            </li>
            <li class="nav-item {{ (request()->is('marketplace/internal_storages')) ? 'active' : '' }}">
                <a href="{{ url('marketplace/internal_storages') }}">Internal Storage</a>
            </li>
          </ul>
      </div>
      {{-- <div class="filter">
          <b>Diurutkan berdasarkan : </b>
          <ul>
              <li class="nav-item">
                  <input type="radio" id="terbaru" name="fav_language" value="terbaru">
                  <label for="terbaru" class="active">Terbaru</label>
              </li>
              <li class="nav-item">
                  <input type="radio" id="asc" name="fav_language" value="asc">
                  <label for="asc">Harga: rendah ke tinggi</label>
              </li>
              <li class="nav-item">
                  <input type="radio" id="desc" name="fav_language" value="desc">
                  <label for="desc">Harga: tinggi ke redah</label>
              </li>
          </ul>
      </div>
      <div class="kompatil">
          <b>Kompatibel dengan : </b>
          <ul>
              <li class="nav-item">
                  <input type="checkbox" id="gen11" name="gen11" value="gen11">
                  <label for="gen11">11th Gen Intel Core</label>
              </li>
              <li class="nav-item">
                  <input type="checkbox" id="gen12" name="gen12" value="gen12">
                  <label for="gen12">12th Gen Intel Core</label>
              </li>
              <li class="nav-item">
                  <input type="checkbox" id="amd" name="amd" value="amd">
                  <label for="amd">7000 Series Amd</label>
              </li>
          </ul>
      </div>
      <div class="kondisi">
          <b>Kondisi : </b>
          <ul>
              <li class="nav-item">
                  <input type="checkbox" id="baru" name="baru" value="baru">
                  <label for="baru">Baru</label>
              </li>
              <li class="nav-item">
                  <input type="checkbox" id="bekas" name="bekas" value="bekas">
                  <label for="bekas">Bekas</label>
              </li>
          </ul>
      </div>
      <div class="stock">
          <b>Ketersediaan :</b>
          <ul>
              <li class="nav-item">
                  <input type="checkbox" id="segera" name="segera" value="segera">
                  <label for="segera">Segera</label>
              </li>
              <li class="nav-item">
                  <input type="checkbox" id="tersedia" name="tersedia" value="tersedia">
                  <label for="tersedia">Tersedia</label>
              </li>
              <li class="nav-item">
                  <input type="checkbox" id="habis" name="habis" value="habis">
                  <label for="habis">Habis</label>
              </li>
          </ul>
      </div> --}}
  </div>
</div>