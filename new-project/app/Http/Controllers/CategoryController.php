<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        return view('category.index' , compact('categories'));
    }

    public function show($id){
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

        public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $category=Category::create($validated);
        return redirect('/categories');
    }

    public function edit( $id){
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
        ]);
               $category = Category::find($id);
                $category->update($request->all());
            return redirect('/categories');
    }

    public function destroy(category $category){

        $category->delete();
        return redirect('/categories');
    }
}
