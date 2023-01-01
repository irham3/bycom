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
                "socketName" => "AM4",
                "introductionYear" => "September 2016",
                "cpuVendor" => "AMD"
            ],

            [
                "socketName" => "LGA 1700",
                "introductionYear" => "November 2021",
                "cpuVendor" => "Intel"
            ],

            [
                "socketName" => "AM4",
                "introductionYear" => "September 2016",
                "cpuVendor" => "AMD"
            ],

            [
                "socketName" => "AM5",
                "introductionYear" => "September 2022",
                "cpuVendor" => "AMD"
            ],

            [
                "socketName" => "LGA 1700",
                "introductionYear" => "November 2021",
                "cpuVendor" => "Intel"
            ]
        ];

        CpuSocket::insert($data);
    }
}
