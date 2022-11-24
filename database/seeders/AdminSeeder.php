<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@bycom.com',
                'mobile' => '088102340929',
                'type' => 'superadmin',
                'seller_id' => 0,
                'password' => '$2y$10$dwwyF1aA1AA1KGtI7roPNeakyMZIM0R8AzBp8kPqnMio4CdesvW1.',
                'image' => '',
                'status' => 1,
            ],
        ];
        Admin::insert($adminRecords); 
    }
}
