<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }
    public function create()
    {
        return view('categories-create');
    }
    public function store(Request $request)
    {
        $category = Category::create([
           'title' => $request->title
        ]);

        return redirect(route('home'));
    }
    public function destroy(int $request)
    {
        $category = Category::findOrFail($request);
        $category->delete();
        return redirect( route('home') );
    }
    public function edit(int $request)
    {
        $category = Category::findOrFail($request);
        return view('categories-edit',['category'=>$category]);
    }
    public function update(int $request,Request $title)
    {
        $category =Category::findOrFail($request);
        $category->update ([
            'title' => $title->input('title')
        ]);
        return redirect(route('home'));
    }

}
