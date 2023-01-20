@extends('layouts.app')

@section('main-content')
<section class="d-flex justify-content-between list-katalog">
  @include('layouts.side-nav-katalog')

  <div class="list-content container" style="margin: 0px 30px;">
  {{-- <form class="d-flex justify-content-end" role="search">
      <input class="form-control py-3" type="search" placeholder="Cari Komponen PC" aria-label="Search">
  </form> --}}

      <div class="pt-5 pb-5 box-category" id="casing-pc">
          <div class="container d-flex justify-content-between">
          <h3>Casing PC</h3>
          <a class="btn" href="{{ url('katalog/cases') }}" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->cases as $dataComponent)
            <div class="card position-relative">
                <center><img src="{{ asset('storage/images/pc-components/case/'. $dataComponent->image) }}" class="card-img-top" alt="case"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/cases/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
          </div>
      </div>

      <div class="pt-5 pb-5 box-category" id="motherboard">
        <div class="container d-flex justify-content-between">
            <h3>Motherboard</h3>
            <a class="btn" href="{{ url('katalog/motherboards') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->motherboards as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/motherboard/'. $dataComponent->image) }}" class="card-img-top" alt="motherboard"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/motherboards/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>

      <div class="pt-5 pb-5 box-category" id="cpu">
        <div class="container d-flex justify-content-between">
            <h3>CPU</h3>
            <a class="btn" href="{{ url('katalog/cpus') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->cpus as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/cpu/'. $dataComponent->image) }}" class="card-img-top" alt="cpu"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/cpus/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5 box-category" id="gpu">
          <div class="container d-flex justify-content-between">
              <h3>GPU</h3>
              <a class="btn" href="{{ url('katalog/gpus') }}" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->gpus as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/gpu/'. $dataComponent->image) }}" class="card-img-top" alt="gpu"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/gpus/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
          </div>
      </div>
      <div class="pt-5 pb-5 box-category" id="ram">
        <div class="container d-flex justify-content-between">
            <h3>RAM</h3>
            <a class="btn" href="{{ url('katalog/memories') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->memories as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/memory/'. $dataComponent->image) }}" class="card-img-top" alt="memory"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/memories/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5 box-category" id="psu">
        <div class="container d-flex justify-content-between">
            <h3>PSU</h3>
            <a class="btn" href="{{ url('katalog/power_supplies') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->power_supplies as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/psu/'. $dataComponent->image) }}" class="card-img-top" alt="power-supply"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/power_supplies/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5 box-category" id="internal-storage">
        <div class="container d-flex justify-content-between">
            <h3>Internal Storage</h3>
            <a class="btn" href="{{ url('katalog/internal_storages') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->internal_storages as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/internal-storage/'. $dataComponent->image) }}" class="card-img-top" alt="power-supply"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('katalog/internal_storages/'.$dataComponent->id) }}" class="btn simulasi">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
  </div>
</section>
@endsection