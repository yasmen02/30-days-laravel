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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string|max:255',
        ]);
        $item = Item::find($id);

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($item->image) {
                Storage::delete($item->image);
            }

            // Store the new image
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        } else {
            // Keep the old image if no new image was uploaded
            $validated['image'] = $item->image;
        }

        // Update item with the validated data
        $item->update($validated);

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|string|max:255',
        ]);

        // Debugging output
        //dd($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = null;
        }

        // Create a new item with the validated data
        Item::create($validated);

        // Redirect or return response as needed
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
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

