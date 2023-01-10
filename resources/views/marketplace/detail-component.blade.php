@extends('layouts.app')

@section('main-content')
<div class="section-title container mt-5" style="border-bottom: 1px solid #000000;">
    <h3 class="pt-3 pb-3">{{ $detailComponent->name }}</h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5 list-marketplace">
    <div class="gallery">
        <div class="container-gallery mb-4 pt-5 pb-5">
            <!-- Expanded image -->
            <img id="expandedImg" style="width: 250px" src="{{ asset('storage/images/pc-components/'.$imageFolder .'/' .$detailComponent->image) }}">
        </div>
    </div>
    <div class="detail-content container ms-3">
        <div class="container bg-blur mb-3 pt-3 pb-2">
            <div class="d-flex justify-content-between mt-5 mb-5 ms-5 me-5">
                <h5>Harga</h5>
                <h5>{{ $detailComponent->price }}</h5>
            </div>
        </div>
        <div class="container bg-blur mt-3 mb-3 pt-3 pb-2">
           <pre class="ms-5">{{ $detailComponent->description }}</pre> 
        </div>

        <div class="d-flex justify-content-end btn-grup pt-2">
            {{-- <a class="btn" href="#" role="button">Masukkan Keranjang</a> --}}
            <a class="btn tokopedia" href="{{ $detailComponent->url }}" target="_blank" role="button">Beli di Tokopedia</a>
        </div>
    </div>
</section>
@endsection
