<?php

namespace Database\Seeders;

use App\Models\Gpu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "ASUS Dual Radeon RX 6600",
                "price" => 3870000,
                "url" => "https://tokopedia.link/UOAKTnaGdwb",
                "image" => "ASUS Dual Radeon RX 6600.png",
                "license" => "AMD",
                "memorySize" => "8GB",
                "tdp" => 132,
                "boostClock" => "2491 MHz",
                "length" => 243
            ],

            [
                "name" => "GeForce RTX 3070 Ti GAMING X TRIO 8G",
                "price" => 9684000,
                "url" => "https://tokopedia.link/XDJWZXqEdwb",
                "image" => "GeForce RTX 3070 Ti GAMING X TRIO 8G.png",
                "license" => "Nvidia",
                "memorySize" => "8GB",
                "tdp" => 310,
                "boostClock" => "1830 MHz",
                "length" => 323
            ],

            [
                "name" => "ASUS Radeon RX 6800",
                "price" => 7900000,
                "url" => "https://tokopedia.link/woLMjMWGdwb",
                "image" => "ASUS Radeon RX 6800.jpg",
                "license" => "AMD",
                "memorySize" => "16GB",
                "tdp" => 250,
                "boostClock" => "2105 MHz",
                "length" => 267
            ],

            [
                "name" => "XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming",
                "price" => 18900000,
                "url" => "https://tokopedia.link/0Xd78m8Idwb",
                "image" => "XFX Radeon RX 7900 XTX 24GB GDDR6 Gaming.jpg",
                "license" => "AMD",
                "memorySize" => "24GB",
                "tdp" => 355,
                "boostClock" => "2500 MHz",
                "length" => 300
            ],

            [
                "name" => "MSI GeForce RTX 4090 SUPRIM X 24G",
                "price" => 34683000,
                "url" => "https://tokopedia.link/bx7S5Y7Jdwb",
                "image" => "MSI GeForce RTX 4090 SUPRIM X 24G.jpg",
                "license" => "Nvidia",
                "memorySize" => "24GB",
                "tdp" => 480,
                "boostClock" => "2625 MHz",
                "length" => 336
            ],

            [
                "name" => "GALAX Geforce GTX 1630 4GB DDR6 EX",
                "price" => 2350000,
                "url" => "https://tokopedia.link/i0LlMEIiiwb",
                "image" => "GALAX Geforce GTX 1630 4GB DDR6 EX.png",
                "license" => "Nvidia",
                "memorySize" => "4GB",
                "tdp" => 75,
                "boostClock" => "1800 MHz",
                "length" => 181
            ],

            [
                "name" => "MSI Geforce GTX 1650 4GB DDR5",
                "price" => 2710000,
                "url" => "https://tokopedia.link/7UqgifWiiwb",
                "image" => "MSI Geforce GTX 1650 4GB DDR5.png",
                "license" => "Nvidia",
                "memorySize" => "4GB",
                "tdp" => 75,
                "boostClock" => "1695 MHz",
                "length" => 177
            ],

            [
                "name" => "MSI Radeon RX 6400 AERO ITX 4G",
                "price" => 2629000,
                "url" => "https://tokopedia.link/xE8EeRMBdwb",
                "image" => "MSI Radeon RX 6400 AERO ITX 4G.png",
                "license" => "AMD",
                "memorySize" => "4GB",
                "tdp" => 53,
                "boostClock" => "2321 MHz",
                "length" => 172
            ],

            [
                "name" => "PowerColor Radeon RX 6500 XT ITX 4GB DDR6",
                "price" => 2948000,
                "url" => "https://tokopedia.link/sXyxZ1ojiwb",
                "image" => "PowerColor Radeon RX 6500 XT ITX 4GB DDR6.png",
                "license" => "AMD",
                "memorySize" => "4GB",
                "tdp" => 107,
                "boostClock" => "2815 MHz",
                "length" => 165
            ],

            [
                "name" => "GALAX Geforce GTX 1660 Ti 6GB DDR6",
                "price" => 3600000,
                "url" => "https://tokopedia.link/k66aTgFjiwb",
                "image" => "GALAX Geforce GTX 1660 Ti 6GB DDR6.png",
                "license" => "Nvidia",
                "memorySize" => "6GB",
                "tdp" => 120,
                "boostClock" => "1785 Mhz",
                "length" => 228
            ]
        ];

        Gpu::insert($data);
    }
}
