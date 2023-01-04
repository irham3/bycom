<?php

namespace Database\Seeders;

use App\Models\Cpu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CpuSeeder extends Seeder
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
                "name" => "AMD Ryzen 5 5600G",
                "price" => 2445000,
                "url" => "https://tokopedia.link/5bX6FFYqbwb",
                "image" => "AMD Ryzen 5 5600G.jpg",
                "cpuSocketId" => 2,
                "coreCount" => 6,
                "coreClock" => "3.90 GHz",
                "boostClock" => "4.40 GHz",
                "tdp" => 65,
                "integratedGraphic" => "Radeon Vega 7"
            ],

            [
                "name" => "Intel Core i7-12700K",
                "price" => 7438000,
                "url" => "https://tokopedia.link/FbOAmT0qbwb",
                "image" => "Intel Core i7-12700K.jpg",
                "cpuSocketId" => 7,
                "coreCount" => 12,
                "coreClock" => "3.60 GHz",
                "boostClock" => "5.00 GHz",
                "tdp" => 190,
                "integratedGraphic" => "Intel UHD Graphics 770"
            ],

            [
                "name" => "AMD Ryzen 7 5800x",
                "price" => 4209000,
                "url" => "https://tokopedia.link/XS7IHa9qbwb",
                "image" => "AMD Ryzen 7 5800x.jpg",
                "cpuSocketId" => 2,
                "coreCount" => 8,
                "coreClock" => "3.80 GHz",
                "boostClock" => "4.70 GHz",
                "tdp" => 105,
                "integratedGraphic" => ""
            ],

            [
                "name" => "AMD Ryzen 9 7950x",
                "price" => 12182000,
                "url" => "https://tokopedia.link/06RDRbbrbwb",
                "image" => "AMD Ryzen 9 7950x.jpg",
                "cpuSocketId" => 3,
                "coreCount" => 16,
                "coreClock" => "4.50 GHz",
                "boostClock" => "5.70 GHz",
                "tdp" => 170,
                "integratedGraphic" => ""
            ],

            [
                "name" => "Intel Core i9-13900K",
                "price" => 10879000,
                "url" => "https://tokopedia.link/tlpU8Herbwb",
                "image" => "Intel Core i9-13900K.jpg",
                "cpuSocketId" => 7,
                "coreCount" => 24,
                "coreClock" => "3.00 GHz",
                "boostClock" => "5.80 GHz",
                "tdp" => 253,
                "integratedGraphic" => "Intel UHD Graphics 770"
            ],

            [
                "name" => "Intel Core i5-8500",
                "price" => 1755000,
                "url" => "https://tokopedia.link/KtWWh1IEhwb",
                "image" => "Intel Core i5-8500.jpg",
                "cpuSocketId" => 5,
                "coreCount" => 6,
                "coreClock" => "3.00 GHz",
                "boostClock" => "4.10 GHz",
                "tdp" => 65,
                "integratedGraphic" => "Intel UHD Graphics 630"
            ],

            [
                "name" => "Intel Core i5-7600",
                "price" => 1005000,
                "url" => "https://tokopedia.link/nxzJwLZEhwb",
                "image" => "Intel Core i5-7600.jpg",
                "cpuSocketId" => 4,
                "coreCount" => 4,
                "coreClock" => "3.50 GHz",
                "boostClock" => "4.10 GHz",
                "tdp" => 65,
                "integratedGraphic" => "Intel HD Graphics 630"
            ],

            [
                "name" => "Intel Core i5-10400",
                "price" => 1887000,
                "url" => "https://tokopedia.link/V2RY2FgFhwb",
                "image" => "Intel Core i5-10400.jpg",
                "cpuSocketId" => 6,
                "coreCount" => 6,
                "coreClock" => "2.90 GHz",
                "boostClock" => "4.30 GHz",
                "tdp" => 65,
                "integratedGraphic" => "Intel UHD Graphics 630"
            ],

            [
                "name" => "AMD Ryzen 5 4500",
                "price" => 1530000,
                "url" => "https://tokopedia.link/MWwLKSrFhwb",
                "image" => "AMD Ryzen 5 4500.jpg",
                "cpuSocketId" => 2,
                "coreCount" => 6,
                "coreClock" => "3.6 GHz",
                "boostClock" => "4.1 GHz",
                "tdp" => 65,
                "integratedGraphic" => ""
            ], 

            [
                "name" => "AMD Ryzen 5 3600",
                "price" => 1958000,
                "url" => "https://tokopedia.link/7uEmK7HFhwb",
                "image" => "AMD Ryzen 5 3600.jpg",
                "cpuSocketId" => 2,
                "coreCount" => 6,
                "coreClock" => "3.6 GHz",
                "boostClock" => "4.2 GHz",
                "tdp" => 65,
                "integratedGraphic" => ""
            ]

        ];

        Cpu::insert($data);
    }
}
