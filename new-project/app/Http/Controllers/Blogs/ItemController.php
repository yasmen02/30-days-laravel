<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Storage;
use App\Models\Author;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\support\Str;

class ItemController extends Controller{
    public function index(Request $request)
    {
        $authors = Author::with('items')->get();
        $categorySlug = $request->input('category');
        $categories = Category::with('items')->get();
        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();

            if ($category) {
                $items = Item::with('category', 'author')
                    ->where('category_id', $category->id)
                    ->paginate(6);
            }
        } else {
            $items = Item::with('category','author') // Assuming 'category' is a relationship on the Item model
            ->paginate(6);
        }
        return view('items.index', compact('items', 'categories','authors'));
    }

    protected function generateUniqueSlug($slug)
    {
        $count = Item::where('slug', $slug)->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
    public function edit(Item $item ,Category $category)
    {
        $authors = Author::with('items')->get();
        $categories = Category::with('items')->get();
        return view('items.edit', compact('item','categories','authors'));
    }

    public function update(Request $request, $id )
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'author_id' => 'required|exists:author,id',
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
        $validated['slug'] = Str::slug($validated['title']);//generate slug from validated title
        $validated['slug'] = $this->generateUniqueSlug($validated['slug']);
        $item->update($validated);
        return redirect()->route('items.show',$item->slug);
    }
    public function create()
    {
        $authors = Author::with('items')->get();
        $categories = Category::with('items')->get();
        return view('items.create', compact('categories','authors'));
    }
    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'author_id' => 'required|exists:author,id',
        ]);
        // Debugging output
        //dd($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = null;
        }
        $validated['slug'] = Str::slug($validated['title']);//generate slug from validated title
        //str->convert title into url friendly
        //convert space -> (-)
         //remove special char
        //convert into lowercase
        //Hello world! -> hello-world
        $validated['slug'] = $this->generateUniqueSlug($validated['slug']);

        // Create a new item with the validated data
        Item::create($validated);
        // Redirect or return response as needed
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }
    public function show($slug)
    {
//        dd($slug);
        $authors = Author::with('items')->get();
        $itemSlug = Item::where('slug', $slug)->first();
        $item = Item::with(['category','author'])
        ->findOrFail($itemSlug->id);
        return view('items.show', compact('item','authors'));
    }
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}

