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
                "cpuSocketId" => 6,
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
                "cpuSocketId" => 6,
                "coreCount" => 24,
                "coreClock" => "3.00 GHz",
                "boostClock" => "5.80 GHz",
                "tdp" => 253,
                "integratedGraphic" => "Intel UHD Graphics 770"
            ]
        ];

        Cpu::insert($data);
    }
}