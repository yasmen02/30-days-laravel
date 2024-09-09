<?php

namespace App\Http\Controllers\Blogs;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::with('items')->get();
        return view('category.index' , compact('categories'));
    }

    public function show($id){
        $category = Category::with('items')->find($id);
        return view('category.show', compact('category'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $validated['slug'] = Str::slug($validated['name']);
        $validated['slug'] = $this->generateUniqueSlug($validated['slug']);
        $category=Category::with('items')->create($validated);
        return redirect('/categories');
    }

    public function edit( $id){
        $category = Category::with('items')->find($id);
        return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'status'=>'required'
        ]);
            $validated['slug'] = Str::slug($validated['name']);
            $validated['slug'] = $this->generateUniqueSlug($validated['slug']);
            $category = Category::with('items')->find($id);
            $category->update($validated);
            return redirect('/categories');
    }

    public function destroy(category $category){
        $category->delete();
        return redirect('/categories');
    }
    protected function generateUniqueSlug($slug)
    {
        $count = Category::where('slug', $slug)->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
