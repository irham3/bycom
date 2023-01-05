@extends('layouts.app')

@section('main-content')
<div class="section-title container mt-5" style="border-bottom: 1px solid #000000;">
    <h3 class="pt-3 pb-3">{{ $detailComponent->name }}</h3>
</div>

<section class="container d-flex justify-content-between mt-5 mb-5">
    <div class="gallery">
        <div class="container-gallery mb-4">
            <!-- Expanded image -->
            <img id="expandedImg" style="width: 200px" src="{{ asset('storage/images/pc-components/'.$imageFolder .'/' .$detailComponent->image) }}">
        </div>
    </div>
    <div class="detail-content container ms-3">
        <div class="container bg-blur mb-3 pt-3 pb-2">
            <div class="d-flex justify-content-between">
                <h5>Harga</h5>
                <p><b>{{ $detailComponent->price }}</b></p>
            </div>
        </div>
        <div class="container bg-blur mt-3 mb-3 pt-3 pb-2">
           <pre>{{ $detailComponent->description }}</pre> 
        </div>

        <div class="d-flex justify-content-end btn-grup pt-2">
            {{-- <a class="btn" href="#" role="button">Masukkan Keranjang</a> --}}
            <a class="btn tokopedia" href="{{ $detailComponent->url }}" target="_blank" role="button">Beli di Tokopedia</a>
        </div>
    </div>
</section>
@endsection
