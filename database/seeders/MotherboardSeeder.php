<?php

namespace Database\Seeders;

use App\Models\Motherboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotherboardSeeder extends Seeder
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
                "name" => "Asus PRIME B450M-A II",
                "price" => 1178000,
                "url" => "https://tokopedia.link/W3JNG6qEcwb",
                "cpuSocketId" => 2,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "Asus TUF Gaming Z690-PLUS WiFi D4",
                "price" => 5051000,
                "url" => "https://tokopedia.link/e3dVvQBUcwb",
                "cpuSocketId" => 6,
                "formFactor" => "ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "ASRock X570 Taichi",
                "price" => 4989000,
                "url" => "https://tokopedia.link/fLJKgp2Fcwb",
                "cpuSocketId" => 2,
                "formFactor" => "ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "Asus ROG CROSSHAIR X670E EXTREME",
                "price" => 17179000,
                "url" => "https://tokopedia.link/ORe3axBFcwb",
                "cpuSocketId" => 3,
                "formFactor" => "EATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "MSI MEG Z690 ACE",
                "price" => 12264000,
                "url" => "https://tokopedia.link/rXYMmldVcwb",
                "cpuSocketId" => 6,
                "formFactor" => "EATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ]
        ];

        Motherboard::insert($data);
    }
}
