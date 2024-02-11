<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        // $data = ['categories'=>Category::all()];
        // $categories = Category::all();
        // return view('category.index',['categories'=>$categories]);
        // return view('category.index',compact('categories'));


        $data['categories'] = Category::all();
        return view('category.index',$data);
    }

    function create(){
        return view('category.create');
    }

    function store(CategoryRequest $req){
        $cat = new Category();
        $cat->name = $req->name;
        $cat->save();
        return redirect()->route('category.list');
    }

    function edit($id){
        $data['category'] = Category::findOrFail($id);
        return view('category.edit',$data);
    }

    function update(CategoryRequest $req,$id){
        $cat = Category::findOrFail($id);
        $cat->name = $req->name;
        $cat->update();
        return redirect()->route('category.list');
    }

    function details($id){
        // $data['cat'] = Category::find($id);
        $data['cat'] = Category::findOrFail($id);
        // $data['cat'] = Category::where('id',$id)->first();
        return view('category.view',$data);
    }
}
