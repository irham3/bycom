@extends('layouts.app')
@section('main-content')
    <section class="home" id="home">
    
    <!-- gambar home  -->
    <div class="image me-3">
        <img src="images/beranda/home-pc-text.png" alt="">
    </div>

    <div class="content ms-5">
        <h3>Rakit PC Impianmu</h3>
        <h3>Dengan <span> <strong>MUDAH</strong> </span></h3>
        <h3>Dan <span><strong>MURAH</strong></span></h3>
        <a href="{{ url('simulasi-rakit-pc') }}" class="btn beranda">Mulai Rakit PC</a>
    </div>

    </section>

    <section class="product" id="product">
        <!-- KERE HORE -->
        <div class="cat-pc mt-2 mb-5">
            <div class="kategori col-5">
                <div class="box">
                    <img src="{{ asset('images/beranda/kerehore.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-7">
                <h1 class="heading title-menu">
                    Paket PC Murah Berkualitas
                </h1>
                <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                        @foreach ($lowBuilds as $lowBuild)    
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="#" class="fas fa-search"></a>
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('storage/images/build-recommendations/'.$lowBuild->image) }}" alt="{{ $lowBuild->image }}">
                            </div>
                            <div class="content">
                                <h3>{{ $lowBuild->title }}</h3>
                                <div class="harga">{{ $lowBuild->formattedPrice }}</div>
                                <a href="{{ $lowBuild->url }}" target="_blank" class="btn">Beli Sekarang</a>
                            </div>
                        </div>                
                        @endforeach

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <!-- Mendang Mending -->
        <div class="cat-pc mt-2 mb-5">
            <div class="kategori col-5">
                <div class="box">
                    <img src="images/beranda/mending.jpg" alt="">
                </div>
            </div>

            <div class="col-7">
                <h1 class="heading title-menu">
                    Paket PC Spek Menengah
                </h1>
                <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                        @foreach ($midBuilds as $midBuild)    
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="#" class="fas fa-search"></a>
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('storage/images/build-recommendations/'.$midBuild->image) }}" alt="{{ $midBuild->image }}">
                            </div>
                            <div class="content">
                                <h3>{{ $midBuild->title }}</h3>
                                <div class="harga">{{ $midBuild->formattedPrice }}</div>
                                <a href="{{ $midBuild->url }}" target="_blank" class="btn">Beli Sekarang</a>
                            </div>
                        </div>                
                        @endforeach                        
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <!-- SULTHAN -->
         <div class="cat-pc mt-2 mb-5">
            <div class="kategori col-5">
                <div class="box">
                    <img src="images/beranda/sulthan.jpg" alt="">
                </div>
            </div>

            <div class="col-7">
                <h1 class="heading title-menu">
                    Paket PC Spek Tinggi
                </h1>
                <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                        @foreach ($highBuilds as $highBuild)    
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="#" class="fas fa-search"></a>
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('storage/images/build-recommendations/'.$highBuild->image) }}" alt="{{ $highBuild->image }}">
                            </div>
                            <div class="content">
                                <h3>{{ $highBuild->title }}</h3>
                                <div class="harga">{{ $highBuild->formattedPrice }}</div>
                                <a href="{{ $highBuild->url }}" target="_blank" class="btn">Beli Sekarang</a>
                            </div>
                        </div>                
                        @endforeach 
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- product section ends -->

@endsection