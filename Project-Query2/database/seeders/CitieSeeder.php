<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citie;
use Illuminate\Support\Facades\File;


class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json=File::get(path:'database/json/city.json');
        $cities=collect(json_decode($json));

        $cities->each(function($cities){
            Citie::create([
                'City_name'=>$cities->City_name,
            ]);

        });
    }
}



           

           