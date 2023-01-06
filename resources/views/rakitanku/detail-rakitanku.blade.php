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
                    @if (session('edit-cpu'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/cpu/'. session()->get('edit-cpu')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-cpu')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-cpu')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-cpu') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/cpu') }}" method="post">
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
                    @if (session('edit-motherboard'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/motherboard/'. session()->get('edit-motherboard')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-motherboard')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-motherboard')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-motherboard') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/motherboard') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedCpuId" value="{{ session('edit-cpu') ? session()->get('edit-cpu')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('edit-cpu') ? '' : 'disabled' }}>
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
                    @if (session('edit-memory'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/memory/'. session()->get('edit-memory')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-memory')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-memory')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-memory') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/memory') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedMoboId" value="{{ session('edit-motherboard') ? session()->get('edit-motherboard')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('edit-motherboard') ? '' : 'disabled' }}>
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
                    @if (session('edit-internal_storage'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/internal-storage/'. session()->get('edit-internal_storage')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-internal_storage')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-internal_storage')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-internal_storage') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/internal_storage') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedMemoryId" value="{{ session('edit-memory') ? session()->get('edit-memory')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('edit-memory') ? '' : 'disabled' }}>
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
                    @if (session('edit-gpu'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/gpu/'. session()->get('edit-gpu')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-gpu')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-gpu')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-gpu') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/gpu') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedStorageId" value="{{ session('edit-internal_storage') ? session()->get('edit-internal_storage')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('edit-internal_storage') ? '' : 'disabled' }}>
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
                    @if (session('edit-case'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/case/'. session()->get('edit-case')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-case')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-case')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-case') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/case') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedGpuId" value="{{ session('edit-gpu') ? session()->get('edit-gpu')->id : ''}}" >
                                    <button class="btn add" type="submit" {{ session('edit-gpu') ? '' : 'disabled' }}>
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
                    @if (session('edit-psu'))
                        <td>
                        <div class="d-flex align-items-center komponen">
                            <div class="flex-shrink-0">
                                <img width="40px" src="{{ asset('storage/images/pc-components/psu/'. session()->get('edit-psu')->image) }}" alt="...">
                            </div>
                            <div class="nama-komponen">
                                {{ session()->get('edit-psu')->name }}
                            </div>
                        </div>
                        </td>
                        <td class="py-4">{{ session()->get('edit-psu')->formattedPrice }}</td>
                        <td class="py-4 e-commerce">
                            <img src="{{ asset('images/keranjang/logo-tokped.png') }}" alt="">                   
                        </td>
                        <td class="py-4">
                            <form action="{{ route('hapusItemSimulasi','edit-psu') }}" method="post">
                                @csrf
                                <button type="submit"><iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon></button>
                            </form>
                        </td>
                    @else    
                        <td>
                            <div class="d-flex align-items-center komponen py-2">
                                <form action="{{ url('/simulasi-rakit-pc/addComponent/power_supplies') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="selectedCaseId" value="{{ session('edit-case') ? session()->get('edit-case')->id : ''}}" >
                                    <input type="hidden" name="totalWattage" value="{{ $totalWattage }}">
                                    <button class="btn add" type="submit" {{ session('edit-case') ? '' : 'disabled' }}>
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
                @if (Auth::user()->id != $)
                    @auth
                    <button class="btn add" data-bs-toggle="modal" data-bs-target="#saveModal">Simpan</button>
                    @else
                    <a class="btn add" href="{{ route('login') }}">Simpan</a>
                    @endauth
                @endif
            </div>

            <div class="pb-5" style="text-align: end;">
                <a class="btn tokopedia" href="#" role="button" onclick="{{ $multipleUrlsScript }}"
                >Beli di Tokopedia</a>
            </div>
        </div>
    </div>

    @include('simulasi-rakit-pc._save-modal')

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
@endsection
