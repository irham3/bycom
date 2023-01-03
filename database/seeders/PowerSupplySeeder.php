<?php

namespace Database\Seeders;


use App\Models\PowerSupply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PowerSupplySeeder extends Seeder
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
                "name" => "Corsair CV Series 450W 80+ Bronze",
                "price" => 739000,
                "url" => "https://tokopedia.link/heL2tZIOewb",
                "image" => "Corsair CV Series 450W 80+ Bronze.jpg",
                "formFactor" => "ATX",
                "efficiencyRating" => "80+ Bronze",
                "wattage" => 450,
                "modular" => "No",
            ],

            [
                "name" => "FSP Hydro M PRO 700W 80+ Bronze",
                "price" => 1020000,
                "url" => "https://tokopedia.link/FX8e38mPewb",
                "image" => "FSP Hydro M PRO 700W 80+ Bronze.jpg",
                "formFactor" => "ATX",
                "efficiencyRating" => "80+ Bronze",
                "wattage" => 700,
                "modular" => "Semi",
            ],

            [
                "name" => "Corsair CXF RGB Series 650W Full Modular - Bronze",
                "price" => 1239000,
                "url" => "https://tokopedia.link/MyyUmnFPewb",
                "image" => "Corsair CXF RGB Series 650W Full Modular - Bronze.png",
                "formFactor" => "ATX",
                "efficiencyRating" => "80+ Bronze",
                "wattage" => 650,
                "modular" => "Full",
            ],

            [
                "name" => "Corsair RMe Series 1000W Full Modular - Gold",
                "price" => 3566000,
                "url" => "https://tokopedia.link/tXmnmcXPewb",
                "image" => "Corsair RMe Series 1000W Full Modular - Gold.jpg",
                "formFactor" => "ATX",
                "efficiencyRating" => "80+ Gold",
                "wattage" => 1000,
                "modular" => "Full",
            ],

            [
                "name" => "Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular",
                "price" => 3367000,
                "url" => "https://tokopedia.link/X644Ow6Pewb",
                "image" => "Cooler Master MWE Gold 1250 V2 80+ Gold - Full Modular.png",
                "formFactor" => "ATX",
                "efficiencyRating" => "80+ Gold",
                "wattage" => 1250,
                "modular" => "Full",
            ]
        ];

        PowerSupply::insert($data);
    }
}
