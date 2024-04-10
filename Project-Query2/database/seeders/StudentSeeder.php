<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json=File::get(path:'database/json/student.json');
        $students=collect(json_decode($json));

        $students->each(function($students){
            Student::create([
                'name'=>$students->name,
                'email'=>$students->email,
                'city'=>$students->city,
                'age'=>$students->age,
            ]);

        });
    }
}
