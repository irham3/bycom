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
                "image" => "Asus PRIME B450M-A II.png",
                "cpuSocketId" => 2,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "Asus TUF Gaming Z690-PLUS WiFi D4",
                "price" => 5051000,
                "url" => "https://tokopedia.link/e3dVvQBUcwb",
                "image" => "Asus TUF Gaming Z690-PLUS WiFi D4.jpg",
                "cpuSocketId" => 7,
                "formFactor" => "ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "ASRock X570 Taichi",
                "price" => 4989000,
                "url" => "https://tokopedia.link/fLJKgp2Fcwb",
                "image" => "ASRock X570 Taichi.jpg",
                "cpuSocketId" => 2,
                "formFactor" => "ATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "Asus ROG CROSSHAIR X670E EXTREME",
                "price" => 17179000,
                "url" => "https://tokopedia.link/ORe3axBFcwb",
                "image" => "Asus ROG CROSSHAIR X670E EXTREME.png",
                "cpuSocketId" => 3,
                "formFactor" => "EATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "MSI MEG Z690 ACE",
                "price" => 12264000,
                "url" => "https://tokopedia.link/rXYMmldVcwb",
                "image" => "MSI MEG Z690 ACE.jpg",
                "cpuSocketId" => 7,
                "formFactor" => "EATX",
                "memoryMaxGB" => 128,
                "memorySlot" => 4
            ],

            [
                "name" => "Biostar H310MHP",
                "price" => 852000,
                "url" => "https://tokopedia.link/GGOxH2mGhwb",
                "image" => "Biostar H310MHP.png",
                "cpuSocketId" => 5,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 32,
                "memorySlot" => 2
            ],

            [
                "name" => "Asrock Fatal1ty B250 Gaming K4",
                "price" => 1500000,
                "url" => "https://tokopedia.link/pGziisBIhwb",
                "image" => "Asrock Fatal1ty B250 Gaming K4.jpg",
                "cpuSocketId" => 4,
                "formFactor" => "ATX",
                "memoryMaxGB" => 64,
                "memorySlot" => 4
            ],

            [
                "name" => "MSI H510M PRO-E",
                "price" => 1059000,
                "url" => "https://tokopedia.link/6z23CtTIhwb",
                "image" => "MSI H510M PRO-E.png",
                "cpuSocketId" => 6,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 64,
                "memorySlot" => 2
            ],

            [
                "name" => "ASRock B450M-HDV",
                "price" => 1051000,
                "url" => "https://tokopedia.link/roU65RtJhwb",
                "image" => "ASRock B450M-HDV.png",
                "cpuSocketId" => 2,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 64,
                "memorySlot" => 2
            ],

            [
                "name" => "Biostar A320MH",
                "price" => 765000,
                "url" => "https://tokopedia.link/FgzqLXQJhwb",
                "image" => "Biostar A320MH.png",
                "cpuSocketId" => 2,
                "formFactor" => "Micro ATX",
                "memoryMaxGB" => 32,
                "memorySlot" => 2
            ],
        ];

        Motherboard::insert($data);
    }
}
