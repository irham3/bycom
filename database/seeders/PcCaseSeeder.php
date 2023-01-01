<?php

namespace Database\Seeders;

use App\Models\PcCase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PcCaseSeeder extends Seeder
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
                "name" => "Darkflash DLX4000",
                "price" => 1275000,
                "url" => "https://tokopedia.link/ktkzpUkCcwb",
                "type" => "Mid Tower",
                "hddSlot" => 3
            ],

            [
                "name" => "Corsair iCUE 5000T",
                "price" => 5576000,
                "url" => "https://tokopedia.link/jDRtHRbCcwb",
                "type" => "Mid Tower",
                "hddSlot" => 6
            ],

            [
                "name" => "MSI MEG Prospect 700R",
                "price" => 5799000,
                "url" => "https://tokopedia.link/tjM8pV4Bcwb",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "be quiet! Dark Base Pro 900",
                "price" => 4109000,
                "url" => "https://tokopedia.link/ZA5e8h1Bcwb",
                "type" => "Full Tower",
                "hddSlot" => 15
            ],

            [
                "name" => "Cooler Master Cosmos C700M",
                "price" => 6899000,
                "url" => "https://tokopedia.link/1ODxaTNBcwb",
                "type" => "Full Tower",
                "hddSlot" => 4
            ]
        ];

        pcCase::insert($data);
    }
}
