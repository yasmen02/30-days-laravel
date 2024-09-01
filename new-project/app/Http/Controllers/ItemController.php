<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller{
    public function index(Request $request)
    {
        $categoryId = $request->input('category');
        $categories = Category::all();

        if ($categoryId) {
            $items = Item::where('category_id', $categoryId)->get();
        } else {
            $items = Item::all();
        }

        return view('items.index', compact('items', 'categories'));
    }


    public function edit(Item $item ,Category $category)
    {
        $categories = Category::all();
        return view('items.edit', compact('item','categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
            'author' => 'required|string|max:255',
        ]);
        $item = Item::find($id);
        $item->update($request->all());
        return redirect()->route('items.show', $id);
    }
    public function create()
    {
        $categories = Category::all();
        return view('items.create', compact('categories'));
    }
    // Store a newly created resource in storage.
    public function store(Request $request)
    {

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
            'author' => 'required|string|max:255',
        ]);

        // Debugging output
        //dd($validated);
        Item::create($request->all());
        return redirect()->route('items.index');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}

