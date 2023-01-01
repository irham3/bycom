<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
<<<<<<< HEAD

=======
        $this->call(CPUSocketSeeder::class);
        $this->call(CpuSeeder::class);
        $this->call(PcCaseSeeder::class);
        $this->call(MotheboardSeeder::class);
        $this->call(MemorySeeder::class);
        $this->call(GpuSeeder::class);
>>>>>>> bf104242e9c134757ab17b842c63f9917020f9ad
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
