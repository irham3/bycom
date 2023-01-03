<?php

namespace Database\Seeders;

use App\Models\CpuSocket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CpuSocketSeeder extends Seeder
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
                // cpuSocketId = 1
                // Processor FX Series
                "socketName" => "AM3+",
                "introductionYear" => "Maret 2012",
                "cpuVendor" => "AMD"
            ],

            [
                // cpuSocketId = 2
                // Ryzen Gen 1 - Gen 5
                "socketName" => "AM4",
                "introductionYear" => "September 2016",
                "cpuVendor" => "AMD"
            ],

            [
                // cpuSocketId = 3
                // Ryzen Gen 7 keatas, (Gen 6 belum ada buat Desktop)
                "socketName" => "AM5",
                "introductionYear" => "September 2022",
                "cpuVendor" => "AMD"
            ],

            [
                // cpuSocketId = 4
                //Buat processor Skylake (Gen 6) & Kaby Lake (Gen 7) 
                "socketName" => "LGA 1151", 
                "introductionYear" => "Agustus 2015",
                "cpuVendor" => "Intel"
            ],

            [
                // cpuSocketId = 5
                //  Kabby Lake Refresh (Gen 8) & Coffe Lake (Gen 9)
                "socketName" => "LGA 1151 v2", 
                "introductionYear" => "Agustus 2017",
                "cpuVendor" => "Intel"
            ],

            [
                // cpuSocketId = 6
                // Buat Processor Gen 10 & Gen 11
                "socketName" => "LGA 1200",
                "introductionYear" => "April 2020",
                "cpuVendor" => "Intel"
            ], 

            [
                // cpuSocketId = 7
                // Buat Processor Gen 12 & Gen 13
                "socketName" => "LGA 1700",
                "introductionYear" => "November 2021",
                "cpuVendor" => "Intel"
            ]
        ];

        CpuSocket::insert($data);
    }
}
