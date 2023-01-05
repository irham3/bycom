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
          <a class="btn" href="{{ url('marketplace/cases') }}" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->cases as $dataComponent)
            <div class="card position-relative">
                <center><img src="{{ asset('storage/images/pc-components/case/'. $dataComponent->image) }}" class="card-img-top" alt="case"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/cases/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
          </div>
      </div>

      <div class="pt-5 pb-5" id="motherboard">
        <div class="container d-flex justify-content-between">
            <h3>Motherboard</h3>
            <a class="btn" href="{{ url('marketplace/motherboards') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->motherboards as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/motherboard/'. $dataComponent->image) }}" class="card-img-top" alt="motherboard"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/motherboards/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>

      <div class="pt-5 pb-5" id="cpu">
        <div class="container d-flex justify-content-between">
            <h3>CPU</h3>
            <a class="btn" href="{{ url('marketplace/cpus') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->cpus as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/cpu/'. $dataComponent->image) }}" class="card-img-top" alt="cpu"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/cpus/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5" id="gpu">
          <div class="container d-flex justify-content-between">
              <h3>GPU</h3>
              <a class="btn" href="{{ url('marketplace/gpus') }}" role="button">Lihat Lainnya</a>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->gpus as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/gpu/'. $dataComponent->image) }}" class="card-img-top" alt="gpu"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/gpus/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
          </div>
      </div>
      <div class="pt-5 pb-5" id="ram">
        <div class="container d-flex justify-content-between">
            <h3>RAM</h3>
            <a class="btn" href="{{ url('marketplace/memories') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->memories as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/memory/'. $dataComponent->image) }}" class="card-img-top" alt="memory"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/memories/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5" id="psu">
        <div class="container d-flex justify-content-between">
            <h3>PSU</h3>
            <a class="btn" href="{{ url('marketplace/power_supplies') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->power_supplies as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/psu/'. $dataComponent->image) }}" class="card-img-top" alt="power-supply"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/power_supplies/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      <div class="pt-5 pb-5" id="internal-storage">
        <div class="container d-flex justify-content-between">
            <h3>Internal Storage</h3>
            <a class="btn" href="{{ url('marketplace/internal_storages') }}" role="button">Lihat Lainnya</a>
        </div>
        <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px;">
            @foreach ($data->internal_storages as $dataComponent)
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/internal-storage/'. $dataComponent->image) }}" class="card-img-top" alt="power-supply"></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $dataComponent->name }}</h5>
                    <p class="card-text">{{ $dataComponent->price }}</p>
                    <a href="{{ url('marketplace/internal_storages/'.$dataComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
  </div>
</section>
@endsection