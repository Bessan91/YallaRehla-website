<?php

namespace Database\Seeders\esktop\yallalRehla_BackEnd\YallaRehla\database\seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\AdminSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\TourSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ServiceSeeder::class);
        // $this->call(TourSeeder::class);
        // $this->call(AdminSeeder::class);




        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
