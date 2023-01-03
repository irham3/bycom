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
                "image" => "Darkflash DLX4000.jpg",
                "type" => "Mid Tower",
                "hddSlot" => 3
            ],

            [
                "name" => "Corsair iCUE 5000T",
                "price" => 5576000,
                "url" => "https://tokopedia.link/jDRtHRbCcwb",
                "image" => "Corsair iCUE 5000T.jpg",
                "type" => "Mid Tower",
                "hddSlot" => 6
            ],

            [
                "name" => "MSI MEG Prospect 700R",
                "price" => 5799000,
                "url" => "https://tokopedia.link/tjM8pV4Bcwb",
                "image" => "MSI MEG Prospect 700R.png",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "be quiet! Dark Base Pro 900",
                "price" => 4109000,
                "url" => "https://tokopedia.link/ZA5e8h1Bcwb",
                "image" => "be quiet! Dark Base Pro 900.jpg",
                "type" => "Full Tower",
                "hddSlot" => 15
            ],

            [
                "name" => "Cooler Master Cosmos C700M",
                "price" => 6899000,
                "url" => "https://tokopedia.link/1ODxaTNBcwb",
                "image" => "Cooler Master Cosmos C700M.png",
                "type" => "Full Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "Paradox Gaming Case Dominion LE-01",
                "price" => 464000,
                "url" => "https://tokopedia.link/wtOjDTn0hwb",
                "image" => "Paradox Gaming Case Dominion LE-01.jpg",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "Powerlogic Armaggeddon NIMITZ N5",
                "price" => 382000,
                "url" => "https://tokopedia.link/TtQWyNw3hwb",
                "image" => "Powerlogic Armaggeddon NIMITZ N5.jpg",
                "type" => "Micro ATX",
                "hddSlot" => 5
            ],

            [
                "name" => "Infinity Nebula V2",
                "price" => 387000,
                "url" => "https://tokopedia.link/qdDDGW53hwb",
                "image" => "Infinity Nebula V2.jpg",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "PCCooler Platinum LM200 Mesh Black",
                "price" => 372000,
                "url" => "https://tokopedia.link/XHdDRis4hwb",
                "image" => "PCCooler Platinum LM200 Mesh Black.jpg",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ],

            [
                "name" => "Raptor Black Strike 1660 ATX",
                "price" => 397000,
                "url" => "https://tokopedia.link/pHR8GlQ4hwb",
                "image" => "Raptor Black Strike 1660 ATX.png",
                "type" => "Mid Tower",
                "hddSlot" => 4
            ]
        ];

        PcCase::insert($data);
    }
}
