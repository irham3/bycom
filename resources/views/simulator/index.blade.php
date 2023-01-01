@extends('layouts.app')
@section('main-content')
    <div class="section-title komponen container mt-5">
        <h3 class="pt-3 pb-3">DETAIL {NAMA RAKITAN}</h3>
    </div>

    <section class="container d-flex justify-content-between mt-5 mb-5">
        <table class="table">
            <thead>
                <tr class="heading-table">
                    <th scope="col">Kategori Komponen</th>
                    <th scope="col">Nama Komponen</th>
                    <th scope="col">Harga</th>
                    <th scope="col">E-commerce</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="py-4 category">CPU</th>
                    <td>
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
                    <td class="py-4"><img src="images/keranjang/logo-tokped.png" alt=""></td>
                </tr>
                <tr>
                    <th class="py-4 category">Motherboard</th>
                    <td>
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
                    <td class="py-4"><img src="images/keranjang/logo-tokped.png" alt=""></td>
                </tr>
                <tr>
                    <th class="py-4 category">Memory</th>
                    <td>
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
                    <td class="py-4"><img src="images/keranjang/logo-tokped.png" alt=""></td>
                </tr>
                <tr>
                    <th class="py-4 category">Internal Storage</th>
                    <td>
                        <div class="d-flex align-items-center komponen py-2">
                            <a class="btn add" href="#" role="button"> + Add Item</a>
                        </div>
                    </td>
                    <td class="py-4"></td>
                    <td class="py-4"></td>
                </tr>
                <tr>
                    <th class="py-4 category">GPU</th>
                    <td>
                        <div class="d-flex align-items-center komponen py-2">
                            <a class="btn add" href="#" role="button"> + Add Item</a>
                        </div>
                    </td>
                    <td class="py-4"></td>
                    <td class="py-4"></td>
                </tr>
                <tr>
                    <th class="py-4 category">Casing</th>
                    <td>
                        <div class="d-flex align-items-center komponen py-2">
                            <a class="btn add" href="#" role="button"> + Add Item</a>
                        </div>
                    </td>
                    <td class="py-4"></td>
                    <td class="py-4"></td>
                </tr>
                <tr>
                    <th class="py-4 category">Power Supply</th>
                    <td>
                        <div class="d-flex align-items-center komponen py-2">
                            <a class="btn add" href="#" role="button"> + Add Item</a>
                        </div>
                    </td>
                    <td class="py-4"></td>
                    <td class="py-4"></td>
                </tr>
            </tbody>
        </table>
    </section>

    <div class="container">
        <div class="d-flex justify-content-end">
            <h3>Total : </h3>
            <h3 class="ms-3"><b>Rp 25.000.000</b></h3>
        </div>
        <div class="pt-1 pb-5" style="text-align: end;"><a class="btn tokopedia" href="#" role="button">Beli di
                Tokopedia</a></div>
    </div>
@endsection