<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function showUser()
    {
        //pagination
        // $users = DB::table('users')->Paginate(5)->appends(['sort'=>'votes','test'=>'abc'])->fragment('roshan'); 
        //paginate(4,['name','city',]/ [*]for all column,p(this field edit url , 2 open 2nd page direct)) 

        //simplepagination
        // $users = DB::table('users')->simplePaginate(5);
        
        //cursorPasinate
        $users = DB::table('users')->orderBy('id')->cursorPaginate(5); 
        return view('allusers',['data'=>$users]);
       
    }

    public function singleUser(string $id)
    {
        $users = DB::table('users')->where('id',$id)->get();
        return view('user',['data'=>$users]);
    }

    public function addUser(Request $req)
    {
        //single records
        $user=DB::table('users')->insert([
            'name'=>$req->Username,
            'email'=>$req->Useremail,
            'city'=>$req->Usercity,
            'age'=>$req->Userage,
            
        ]);

        if($user== true)
        return redirect()->route('home');
       else
        echo "<h1>Data not added</h1>";


        //multi records

        // $user=DB::table('users')->insert([

        //     [
        //         'name'=>'ravi',
        //         'email'=>'ravi@123',
        //         'city'=>'hedrabad',
        //         'age'=>20,
        //     ],
        //     [
        //         'name'=>'shayam',
        //         'email'=>'shayam@gmail.com',
        //         'city'=>'ahamdabad',
        //         'age'=>19,
                
        //     ]
        // ]);

        //duplicate entry not accpet record if any column is unique and containing same data
        // $user=DB::table('users')->insertOrIgnore([

        //     [
        //     'name'=>'ravi',
        //     'email'=>'ravi@gamil',
        //     'city'=>'hedrabad',
        //     'age'=>20,
        //     ]
                
        //     ]);

        // if($user== true)
        //  echo " <h1>Successfully added</h1>";
        // else
        //  echo "<h1>Data not added</h1>";
    

        //upsert method
        // $user=DB::table('users')->upsert(
        //     [
        //     'name'=>'ravi',
        //     'email'=>'ravi123@gamil',
        //     'city'=>'mumbai',
        //     'age'=>20,
        //     ],
        //     ['email'], //we can pass multipal unique column here
        //      ['city']// only city will update rest of column not update
        //     );

        // if($user== true)
        //  echo " <h1>Successfully updated</h1>";
        // else
        //  echo "<h1>Data not added</h1>";

        
        //insertGetId   only work when a table containing auto increment column atleast one
        // $user=DB::table('users')->insertGetId(
        //     [
        //     'name'=>'abhitabh bacchan',
        //     'email'=>'abhitabh@gamil',
        //     'city'=>'pune',
        //     'age'=>25,
        //     ]
        //     );
         
        //     return $user;
        // if($user== true)
        //  echo " <h1>Successfully updated</h1>";
        // else
        //  echo "<h1>Data not added</h1>";
    }

    public function updatePage(string $id)
    {
        //  $user=DB::table('users')->where('id',$id)->get();
        $user=DB::table('users')->find($id);
        return view('updateuser',['data'=>$user]);

    }
    public function updateUser(Request $req, $id)
    {
          $user=DB::table('users')
          ->where('id',$id)
          ->update(
            [
                'name'=>$req->Username,
                'email'=>$req->Useremail,
                'city'=>$req->Usercity,
                'age'=>$req->Userage,
            ]);

            if($user== true)
            return redirect()->route('home');
           else
            echo "<h1>Data not updated</h1>";

        //   if($user== true)
        //  echo " <h1> data Successfully updated</h1>";
        // else
        //  echo "<h1>Data not added</h1>";

        // $user=DB::table('users')
        //       ->updateOrInsert(
        //     ['city'=>'Indore',
        //     'name'=>'Nayak'],     //we can change multiple coloumn value
        //    ['age'=>21]         
        // );

        //   if($user== true)
        //  echo " <h1> data Successfully updated</h1>";
        // else
        //  echo "<h1>Data not updated</h1>";

         //increment methoda 
         //-  increment('age')  age will increment by 1
         //   increment('age',5) age will increment by 5

         //incrementEach
         //-  incrementEach(['age','vote'])  age and vote will increment by 1
         //-  incrementEach(['age'=>2,'vote'=>3])


         //decrement methoda 
         //-  decrement('age')  age will decrement by 1
         //   decrement('age',5) age will decrement by 5

         //decrementEach
         //-  decrementEach(['age','vote'])  age and vote will decrement by 1
         //-  decrementEach(['age'=>2,'vote'=>3])
    }

    // public function deleteUser(){
    //     $user=DB::table('users')
    //     ->where('id',7)->delete();

    //     if($user== true)
    //      echo " <h1> data Successfully deleted</h1>";
    //     else
    //      echo "<h1>Data not deleted</h1>";
    // }

    public function deleteuser1(string $id){
        $user=DB::table('users')
        ->where('id',$id)->delete();


        return redirect()->route('home');
        // $user=DB::table('users')
        //->delete(); it will remove all the data without receting id column

          // $user=DB::table('users')
        //->truncate(); it will remove all the data with receting id column id start with 1


   
        // if($user== true)
        //  echo " <h1> data Successfully deleted</h1>";
        // else
        //  echo "<h1>Data not deleted</h1>";
    }

    public function deleteUser(string $id){
        $user=DB::table('users')->where('id',$id)->get();
// return $user;
        return view('deleteuser',['data'=>$user]);
    //   return redirect()->back();
        
    }
}




//methods

        // dd($users);
        // dump($users);

        // foreach($users as $user){
        //     echo $user->name."<br>";
        // }

        

        // $users = DB::table('users')
        // ->select('name','age')->get();
        // return $users;

        //rename column
        // $users = DB::table('users')
        // ->select('email as user_email')->get();
        // return $users;
         
        //Distinct method
        // $users = DB::table('users')
        // ->select('city')
        // ->distinct()->get();
        // return $users;

        //pluck
        // $users = DB::table('users')
        // ->pluck('city','name');
        // return $users;


        //where clouse

        // $users = DB::table('users')
        // ->where('city','indore')->where('age','>',22)->where('name','like','B%')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->where('name','like','B%')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->where([
        //         ['city','=','Bhopal'],
        //         ['age','>',20]
        //         ])
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->where('city','=','Bhopal')
        // ->orWhere('age','>',22)
        // ->get();
        // return $users;
        
        // $users = DB::table('users')
        // ->whereBetween('age',[22,23])
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereBetween('id',[3,5])
        // ->get();
        // return $users;

        
        // $users = DB::table('users')
        // ->whereNotBetween('id',[3,5])
        // ->get();
        // return $users;

        
        // $users = DB::table('users')
        // ->whereIn('id',[1,3,5])
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereIn('city',['Bhopal','Indore'])
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereNotIn('city',['Bhopal','Indore'])
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereNull('city')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereDate('created_at','2024-04-27')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereMonth('created_at','4')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereDay('created_at','27')
        // ->get();
        // return $users;
         
        // $users = DB::table('users')
        // ->whereYear('created_at','2024')
        // ->get();
        // return $users;

        // $users = DB::table('users')
        // ->whereTime('created_at','13:40:34')
        // ->get();
        // return $users;

        // $users = DB::table('users')->orderBy('name')
        // ->get();
        // return $users;

        // $users = DB::table('users')->orderBy('age')
        // ->get();
        // return $users;

        // $users = DB::table('users')->orderBy('age','asc')
        // ->get();
        // return $users;

        // $users = DB::table('users')->orderBy('age','desc')
        // ->get();
        // return $users;

        // $users = DB::table('users')->orderBy('name','asc')->orderBy('age','desc')
        // ->get();
        // return $users;

        // $users = DB::table('users')->latest()->first();
        // return $users;

        // $users = DB::table('users')->oldest()->first();
        // return $users;

        // $users = DB::table('users')->inRandomOrder()->first();
        // return $users;
        
        // $users = DB::table('users')->limit(3)->get();
        // return $users;

        // $users = DB::table('users')->limit(3)->offset(6)->get();
        // return $users;

        // $users = DB::table('users')->take(3)->skip(6)->get();
        // return $users;
    
         
        // $users = DB::table('users')->count();
        // return $users;

        // $users = DB::table('users')->max('age');
        // return $users;

        // $users = DB::table('users')->min('age');
        // return $users;

        // $users = DB::table('users')->avg('age');
        // return $users;

        // $users = DB::table('users')->sum('age');
        // return $users;
