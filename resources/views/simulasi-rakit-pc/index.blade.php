@extends('layouts.app')
@section('main-content')
    <div class="section-title komponen container mt-5">
        <h3 class="pt-3 pb-3">
            @if (isset($prevRakitanData))
            {{  $prevRakitanData->name }}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-html="true" title="<h5>Anda bisa membagikan url page ini ke teman anda">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
              </svg>
            @else
              {{ __('Simulasi Rakit PC') }}
            @endif
        </h3>
    </div>

    <section class="container d-flex justify-content-between mb-5">
        <table class="table">
            <thead>
                <tr class="heading-table">
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Komponen</th>
                    <th scope="col">Harga</th>
                    <th scope="col">E-commerce</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="py-4 category">CPU</th>
                    @if (session('cpus'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/cpu/'. session()->get('cpus')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('cpus')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('cpus')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','cpus') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/cpus') }}" method="post">
                                    @csrf
                                    <button class="btn add" type="submit">+ Add Item </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">Motherboard</th>
                    @if (session('motherboards'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/motherboard/'. session()->get('motherboards')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('motherboards')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('motherboards')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','motherboards') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/motherboards') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedCpuId" value="{{ session('cpus') ? session()->get('cpus')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('cpus') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">Memory</th>
                    @if (session('memories'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/memory/'. session()->get('memories')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('memories')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('memories')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','memories') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/memories') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedMoboId" value="{{ session('motherboards') ? session()->get('motherboards')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('motherboards') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">Internal Storage</th>
                    @if (session('internal_storages'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/internal-storage/'. session()->get('internal_storages')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('internal_storages')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('internal_storages')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','internal_storages') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/internal_storages') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedMemoryId" value="{{ session('memories') ? session()->get('memories')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('memories') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">GPU</th>
                    @if (session('gpus'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/gpu/'. session()->get('gpus')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('gpus')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('gpus')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','gpus') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/gpus') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedStorageId" value="{{ session('internal_storages') ? session()->get('internal_storages')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('internal_storages') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">Casing</th>
                    @if (session('cases'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/case/'. session()->get('cases')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('cases')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('cases')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','cases') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/cases') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedGpuId" value="{{ session('gpus') ? session()->get('gpus')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('gpus') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
                <tr>
                    <th class="py-4 category">Power Supply</th>
                    @if (session('power_supplies'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/psu/'. session()->get('power_supplies')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('power_supplies')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('power_supplies')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            @if (!isset($prevRakitanData)) 
                            <form action="{{ route('hapusItemSimulasi','power_supplies') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                            @endif
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/power_supplies') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedCaseId" value="{{ session('cases') ? session()->get('cases')->id : ''}}" >
                                    <input type="hidden" name="totalWattage" value="{{ $totalWattage }}">
                                    <button class="btn add" type="submit" {{ session('cases') ? '' : 'disabled' }}>
                                        + Add Item
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="py-4"></td>
                        <td class="py-4"></td>
                    @endif
                </tr>
            </tbody>
        </table>
    </section>

    <div class="container">
        <div class="d-flex justify-content-end">
            <h3>Total : </h3>
            <h3 class="ms-3"><b>{{ $formattedTotalPrice }}</b></h3>
        </div>
        <div class="d-flex justify-content-end">
            <div class="me-3">
                {{-- View Simulasi Yang disimpan--}}
                @if (isset($prevRakitanData))
                        {{-- Tidak ada button simpan lagi --}}

                {{-- Buat Simulasi Baru --}}
                @else  
                    @if (Route::has('login'))
                        @auth
                            <button class="btn add" data-bs-toggle="modal" data-bs-target="#saveModal">Simpan</button>
                            @include('simulasi-rakit-pc._save-modal')
                        @else
                            <a class="btn add" href="{{ route('login') }}">Simpan</a>
                        @endauth
                    @endif
                @endif
                
            </div>

            <div class="pb-5" style="text-align: end;">
                <a class="btn tokopedia" href="#" role="button" onclick="{{ $multipleUrlsScript }}"
                >Beli di Tokopedia</a>
            </div>
        </div>
    </div>
    
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
@endsection
