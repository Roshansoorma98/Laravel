<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
      
      product::factory(10)->create();
      // product::factory()->count(5)->create();
      
      //this is for Seeding
      
      // $this->call([
      //      studentfirstSeeder::class
      // ]);

    }
        
}
