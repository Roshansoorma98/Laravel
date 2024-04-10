<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class categoryController extends Controller
{
    public function index()
    {
        $categories=category::get();
        // return $categories;
        return view('category.index',compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'Description'=>'required|max:255|string',
            'is_active'=>'sometimes'
        ]);
       
        category::create([
            'name'=>$request->name,
            'Description'=>$request->Description,
            'is_active'=>$request->is_active == true ? 1:0,
        ]);

        return redirect('categories/create')->with('status','Category Created');
    }
    public function edit(int $id)
    {
         $category=category::findOrFail($id);
        // $category=category::find($id);
        // return $category;
        return view('category.edit',compact('category'));
    }
    public function update(Request $request,int $id)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'Description'=>'required|max:255|string',
            'is_active'=>'sometimes'
        ]);
        category::findOrFail($id)->update([
            'name'=>$request->name,
            'Description'=>$request->Description,
            'is_active'=>$request->is_active == true ? 1:0,
        ]);

        return redirect()->back()->with('status','Category Updated');
    }

    public function destroy(int $id)
    {
        $category= category::findOrFail($id);
        $category->delete();
         return redirect()->back()->with('status','Category Deleted');
       
    }
}
