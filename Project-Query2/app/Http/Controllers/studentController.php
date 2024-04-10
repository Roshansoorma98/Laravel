<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
     
    public function showStudent()
    
    {
        // $student = DB::table('students')
        // ->leftJoin('cities','students.city','=','cities.id')
        // ->select(DB::raw('count(*) as Student_count'),'city_name')
        // ->groupBy('city_name')
        // // ->having('Student_count','<','4')
        // ->havingBetween('Student_count',[1,10])
        // ->orderBY('Student_count','desc')
        // ->where('cities.city_name','=','Mumbai')
        // ->get();


        // ->where('students.email','=','roshansoorma@gmail.com')
         // ->count();
        // return $student; //json formate

        // return view('student',compact('student'));


        //second method for join
        $student = DB::table('students')
        ->leftJoin('cities',function(Joinclause $join){
            $join->on('students.city','=','cities.id')
            ->where('students.name','like','a%');
        })
        ->select('students.*','cities.city_name')
        ->get();
        return $student;
    }
}
