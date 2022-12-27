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
                "name" => "Intel Core i7-10700K",
                "url" => "https://tokopedia.link/SDYUwopu5vb",
                "core_count" => 4,
                "core_clock" => "3.30 GHz",
                "boost_clock" => "4.30 GHz",
                "tdp" => "58 W",
                "integrated_graphics" => ""
            ],
        ];

        Cpu::insert($data);
    }
}
