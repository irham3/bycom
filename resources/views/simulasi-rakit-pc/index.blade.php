@extends('layouts.app')
@section('main-content')
    <div class="section-title komponen container mt-5">
        <h3 class="pt-3 pb-3">Simulasi Rakit PC</h3>
    </div>

    <section class="container d-flex justify-content-between mb-5">
        <table class="table">
            <thead>
                <tr class="heading-table">
                    <th scope="col">Kategori Komponen</th>
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
                            <form action="{{ route('hapusItemSimulasi','cpus') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/cpus') }}" method="post">
                                    @csrf
                                    <button class="btn add" type="submit"> + Add Item </button>
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
                            <form action="{{ route('hapusItemSimulasi','motherboards') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
                            <form action="{{ route('hapusItemSimulasi','memories') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
                            <form action="{{ route('hapusItemSimulasi','internal_storages') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
                            <form action="{{ route('hapusItemSimulasi','gpus') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
                            <form action="{{ route('hapusItemSimulasi','cases') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
                            <form action="{{ route('hapusItemSimulasi','power_supplies') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
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
            <h3 class="ms-3"><b>{{ $totalPrice }}</b></h3>
        </div>
        <div><a class="btn" href="#" role="button">Simpan</a></div>
        <div class="pt-1 pb-5" style="text-align: end;">
            <a class="btn tokopedia" href="#" role="button" onclick="{{ $multipleUrlsScript }}"
            >Beli di Tokopedia</a></div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
@endsection

{{-- <td>
    <div class="d-flex align-items-center komponen">
        <div class="flex-shrink-0">
            <img src="images/keranjang/contoh.png" alt="...">
        </div>
        <div class="nama-komponen">
            Thermalright Peerless Assassin 66.17 CFM CPU Cooler
        </div>
    </div>
</td>
<td class="py-4">$41.30</td>
<td class="py-4 e-commerce">
    <img src="images/keranjang/logo-tokped.png" alt="">                   
</td>
<td class="py-4">
    <a href="#">
        <button><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
    </a>
</td> --}}