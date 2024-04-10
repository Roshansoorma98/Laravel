<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\studentfirst;
use Illuminate\Support\Facades\File;

class studentfirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         //puting fake data
         for($i=0;$i<=10;$i++)
         {
            studentfirst::create([
                'name'=>fake()->name(),
                'email'=>fake()->email
                   ]);
         }
        


        // using json file

    //     $json= File::get(path:'database/json/student.json');
    //     $students=collect(json_decode($json));

    //     $students->each(function($student){
    //     studentfirst::create([
    //      'name'=
    //     ]);>$student->name,
    //     'email'=>$student->email
    // });


    

        // $students=collect([
        //     [
        //         'name'=>'Roshan soorma',
        //         'email'=>'roshansoorma@gmail.com',
        //     ],
        //     [
        //         'name'=>'Deependra soorma',
        //         'email'=>'deep123@gmail.com',
        //     ],
        //     [
        //         'name'=>'Abhishek raghuwanshi',
        //         'email'=>'abhi@gmail.com',
        //     ],
        //     [
        //         'name'=>'Durgesg raghuwanshi',
        //         'email'=>'durgesh234@gmail.com',
        //     ]

        //     ]);

        //     $students->each(function($student){
        //         studentfirst::insert($student);
        //     });
        // studentfirst::create([
        //     'name'=>'Roshan soorma',
        //     'email'=>'roshansoorma@gmail.com',
        // ]);
    }
}
