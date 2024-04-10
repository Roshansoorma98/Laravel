<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControll extends Controller
{
    public function showHome()
    {
               return view('home');
    }
    public function showUser(string $id)
    {
            //    return view('Users',['id'=>$id]);
               return view('Users',compact('id'));
    }
    public function showBlog()
    {
               return view('blog');
    }
}