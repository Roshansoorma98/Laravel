<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
            //   return "<h1>Page is successfully running</h1>";
            return view('blog');
    }
    
}
