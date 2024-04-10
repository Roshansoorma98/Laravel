<?php

use Illuminate\Support\Facades\Route;
//base Route 
Route::get('/', function () {
    return view('welcome');
});

/*same route diff file
Route::get('/', function () {
    return view('hello');
});

/*dirct view content
Route::get('/', function () {
    return "<h1>without view </h1>";
});

/without function
Route :: view('/maya','hello');

//self created
Route::get('/Roshan', function () {
    return view('hello');
});

// sub routes
Route::get('/Roshan/first', function () {
    return view('first');
});

//id compulsory
Route::get('/Roshan/{id}', function (string $id){
    return "<h1>show id:". $id."</h1>";
});

//id optional 
Route::get('/Roshan/{id?}', function (string $id=null){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>no id:". $id."</h1>";
    }
});

Route::get('/Roshan/{id?}/comment/{commentid?}', function (string $id=null,$commentid=null){
    
    if($id){
        return "<h1>show id:". $id."</h1><h2>$commentid</h2>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
});

//numeric value

Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->whereNumber('id')

//alpha value
Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->whereAlpha('id');

//alpha numeric
Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->whereAlphaNumeric('id');


//user defined value
Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->whereIn('id',['movie','song','yahoo']);

//only numeric
Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->where('id','[0-9]+');

//only alpha
Route::get('/Roshan/{id}', function (string $id){
    
    if($id){
        return "<h1>show id:". $id."</h1>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->where('id','[a-zA-Z]+');


Route::get('/Roshan/{id?}/comment/{commentid?}', function (string $id=null,$commentid=null){
    
    if($id){
        return "<h1>show id:". $id."</h1><h2>$commentid</h2>";
    }else{
        return "<h1>without id:". $id."</h1>";
    }
})->where('id','[0-9]+')->whereAlpha('commentid');



//Name Route

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rohit', function () {
    return view('post');
});

Route::get('/roshansoorma111', function () {
    return view('hello');
})->name('rose');

//redirect
Route::redirect('/Roshan','/rohit');


//Group route
Route::prefix('page')->group(function(){

Route::get('/Roshan', function () {
    return "<h1>Hello Roshan </h1>";
});
Route::get('/rose', function () {
    return "<h1>This is Rose</h1>";
});
Route::get('/sunil/verma', function () {
    return "<h1>Your Sunil</h1>";
});

});



//fallback method
Route::fallback(function () {
    return "<h1>Page not found by fallback</h1>";
});
*/
// Route::get('/ptest', function () {
//     return view('ptest');
// });

// Route::get('/masterlayout', function () {
//     return view('Layouts.masterlayout');
// });
// Route::get('/pos', function () {
//     return view('pos');
// });
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/home', function () {
//     return view('Home');
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/users', function () {
//     return view('users',['user'=>'Roshan soorma',
//     'city'=>'seoni malwa' 
//     // city'=>'<script>alert("Seoni malwa");</script>',
//      ]);
//     });

function getUsers(){
    return [
        1=>['name'=>'Abhishek Babble','phone'=>'9878965855','city'=>'Tinsya'],
       2=>['name'=>'Roshan Soorma','phone'=>'9009158465','city'=>'Seoni malwa'],
       3=>['name'=>'Deependra soorma','phone'=>'7987969798','city'=>'Seoni malwa'],
       4=>['name'=>'Nayak khalnayak','phone'=>'8770946892','city'=>'Sagar'],
        5=>['name'=>'Durgesh raghuwanshi','phone'=>'9009546717','city'=>'Tinsya']];
}
    Route::get('/users', function () {
    

        // return view('users')
        // ->with('user','Roshan Soorma')
        // ->with('City','Seoni malwa');

        // return view('users')
        // ->withUser('Roshan Soorma')
        // ->withCity('');
         $names=getUsers();
        return view('users',['user'=>$names]);

        });


        Route::get('/user/{id}', function ($id) {
        $users=getUsers();
        abort_if(!isset($users[$id]), 404);    
        $user=$users[$id];

            return view('user',['id'=>$user]);
        })->name('view.user');
        






