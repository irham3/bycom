@extends('layouts.app')
@section('main-content')
<section class="d-flex justify-content-between list-marketplace">
  <!--Side Nav Marketplace-->
  @include('layouts.side-nav-marketplace')

  <div class="list-content container mt-5" style="margin: 0px 30px;">
      {{-- <form class="d-flex justify-content-end" role="search">
          <input class="form-control py-3" type="search" placeholder="Cari Komponen PC" aria-label="Search">
      </form> --}}

      <div class="pt-5 pb-5 box-category" id="casing-pc">
          <div class="container d-flex justify-content-between">
              <h3>{{ $data->categoryTitle }}</h3>
          </div>
          <div class="card-content d-flex justify-content-evenly pt-3" style="padding-left: 30px; flex-wrap: wrap;">
            @foreach ($data->pcComponents as $pcComponent)    
            <div class="card">
                <center><img src="{{ asset('storage/images/pc-components/'.$data->imageFolder.'/'.$pcComponent->image) }}" class="card-img-top" alt="..."></center>
                <div class="card-body mt-3">
                    <h5 class="card-title">{{ $pcComponent->name }}</h5>
                    <p class="card-text">{{ $pcComponent->price }}</p>
                    <a href="{{ url('marketplace/'.$table.'/'.$pcComponent->id) }}" class="btn ">Lihat Detail</a>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </div>
</section>
@endsection