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
                'name' => 'Admin',
                'email' => 'admin@bycom.com',
                'mobile' => '088102340929',
                'type' => 'admin',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
        ];
        Admin::insert($adminRecords); 
    }
}
