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
                "type" => "DDR4-3200",
                "count" => 2,
                "capacityPerPiece" => 4
            ],

            [
                "name" => "Corsair DDR4 Vengeance RGB RS PC28800 32GB ",
                "price" => 2005000,
                "url" => "https://tokopedia.link/NHv1xVm1cwb",
                "type" => "DDR4-3600",
                "count" => 2,
                "capacityPerPiece" => 16
            ],

            [
                "name" => "ADATA DDR4 XPG SPECTRIX D50 PC28800 3600MHz 32GB  ",
                "price" => 1891000,
                "url" => "https://tokopedia.link/InxovsB1cwb",
                "type" => "DDR4-3600",
                "count" => 2,
                "capacityPerPiece" => 16
            ],

            [
                "name" => "Team Elite Plus Black DDR5 PC38400 64GB",
                "price" => 4382000,
                "url" => "https://tokopedia.link/bBHFoXc2cwb",
                "type" => "DDR5-5200",
                "count" => 2,
                "capacityPerPiece" => 32
            ],

            [
                "name" => "RAM CORSAIR VENGEANCE 64GB 2x32GB DDR5 DRAM 5600Mz",
                "price" => 20769000,
                "url" => "https://tokopedia.link/JSY4pbu2cwb",
                "type" => "DDR5-5600",
                "count" => 2,
                "capacityPerPiece" => 32
            ]
        ];

        Memory::insert($data);
    }
}
