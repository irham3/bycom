<?php

namespace Database\Seeders;

use App\Models\Memory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemorySeeder extends Seeder
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
                "name" => "V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB",
                "price" => 732000,
                "url" => "https://tokopedia.link/wMHmBAy0cwb",
                "image" => "V-GeN TsunamiX RGB DDR4 PC25600 3200Mhz Dual Channel 8GB.jpg",
                "type" => "DDR4-3200",
                "count" => 2,
                "capacityPerPiece" => 4
            ],

            [
                "name" => "Corsair DDR4 Vengeance RGB RS PC28800 32GB",
                "price" => 2005000,
                "url" => "https://tokopedia.link/NHv1xVm1cwb",
                "image" => "Corsair DDR4 Vengeance RGB RS PC28800 32G.jpg",
                "type" => "DDR4-3600",
                "count" => 2,
                "capacityPerPiece" => 16
            ],

            [
                "name" => "ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB",
                "price" => 1891000,
                "url" => "https://tokopedia.link/InxovsB1cwb",
                "image" => "ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB.jpg",
                "type" => "DDR4-3600",
                "count" => 2,
                "capacityPerPiece" => 16
            ],

            [
                "name" => "Team Elite Plus Black DDR5 PC38400 64GB",
                "price" => 4382000,
                "url" => "https://tokopedia.link/bBHFoXc2cwb",
                "image" => "Team Elite Plus Black DDR5 PC38400 64GB.jpg",
                "type" => "DDR5-5200",
                "count" => 2,
                "capacityPerPiece" => 32
            ],

            [
                "name" => "CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz",
                "price" => 20769000,
                "url" => "https://tokopedia.link/JSY4pbu2cwb",
                "image" => "CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz.jpg",
                "type" => "DDR5-5600",
                "count" => 2,
                "capacityPerPiece" => 32
            ],

            [
                "name" => "Apacer DDR4 PC21000 2666Mhz 8GB",
                "price" => 413000,
                "url" => "https://tokopedia.link/ywz5Z9SLiwb",
                "image" => "Apacer DDR4 PC21000 2666Mhz 8GB.jpg",
                "type" => "DDR4-2666",
                "count" => 1,
                "capacityPerPiece" => 8
            ],

            [
                "name" => "Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB",
                "price" => 408000,
                "url" => "https://tokopedia.link/rA3J71dMiwb",
                "image" => "Team Elite Plus Black DDR4 PC19200 2400Mhz 8GB.jpg",
                "type" => "DDR4-2400",
                "count" => 1,
                "capacityPerPiece" => 8
            ],

            [
                "name" => "KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300",
                "price" => 390000,
                "url" => "https://tokopedia.link/LCQjSm6Miwb",
                "image" => "RAM KINGSTON HYPERX FURY DDR4 8GB 2666MHz 21300.jpg",
                "type" => "DDR4-2666",
                "count" => 1,
                "capacityPerPiece" => 8
            ],

            [
                "name" => "Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz",
                "price" => 831000,
                "url" => "https://tokopedia.link/BfpCWMcOiwb",
                "image" => "Team T-Force Vulcan Z Red DDR4 PC25600 3200MHz.jpg",
                "type" => "DDR4-3200",
                "count" => 2,
                "capacityPerPiece" => 16
            ],

            [
                "name" => "Avexir DDR4 Budget 2400MHZ 8GB",
                "price" => 514000,
                "url" => "https://tokopedia.link/x1YRSupOiwb",
                "image" => "Avexir DDR4 Budget 2400MHZ 8GB.jpg",
                "type" => "DDR4-2400",
                "count" => 1,
                "capacityPerPiece" => 8
            ]
        ];

        Memory::insert($data);
    }
}
