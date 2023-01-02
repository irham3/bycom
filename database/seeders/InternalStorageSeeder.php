<?php

namespace Database\Seeders;

use App\Models\InternalStorage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternalStorageSeeder extends Seeder
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
                "name" => "Transcend MTS830 512GB M.2 SATA III",
                "price" => 683000,
                "url" => "https://tokopedia.link/2UUalAovfwb",
                "capacity" => "512GB",
                "type" => "SSD M.2 Sata III",
            ],

            [
                "name" => "Samsung SSD 980 M.2 PCIe Gen3 x4 500GB MZ-V8V500BW",
                "price" => 841000,
                "url" => "https://tokopedia.link/vnT9icavfwb",
                "capacity" => "500GB",
                "type" => "SSD NVME",
            ],

            [
                "name" => "SSD ADATA SU800 1TB SATA III",
                "price" => 2105000,
                "url" => "https://tokopedia.link/oXQD2MCvfwb",
                "capacity" => "1TB",
                "type" => "SSD SATA III",
            ],

            [
                "name" => "Toshiba 2TB SATA3 256MB 7200RPM - P300 Series",
                "price" => 801000,
                "url" => "https://tokopedia.link/x53R21Kvfwb",
                "capacity" => "2TB",
                "type" => "HDD 7200RPM",
            ],

            [
                "name" => "WDC Purple Surveillance 2TB - WD22PURZ",
                "price" => 897000,
                "url" => "https://tokopedia.link/WyrwxaOvfwb",
                "capacity" => "2TB",
                "type" => "HDD 5400RPM",
            ]
        ];
        InternalStorage::insert($data);
    }
}
