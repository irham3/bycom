<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Irham Tri Ahmadi',
                'email' => 'irhamtria@gmail.com',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
            [
                'name' => 'Muhammad Fadhlan Syauqi',
                'email' => 'fadhlan@gmail.com',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
            [
                'name' => 'Alfina Balqis Nurzaharani',
                'email' => 'alfina@gmail.com',
                'password' => '$2y$10$lkbPD6BrmeMMlPF/WL1tcO0gvgRfPxXn2RvbRKSZlzRn9N48A7uAG',
            ],
        ];
        User::insert($user);
    }
}
