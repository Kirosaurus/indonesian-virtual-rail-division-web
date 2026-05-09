<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Images;

class AdminProductsController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->paginate(10);
        $categories = Categories::pluck('name', 'id');

        return view('admin.products.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function  create()
    {
        $categories = Categories::all();

        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'string|in:payware,freeware',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|',
            'category' => 'required|exists:categories,id',
            'active' => 'boolean'
        ]);

        $files = null;
        if ($request->hasFile('image')) {
            $files = $request->file('image', []);
        }

        $product = Products::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category,
            'active' => $request->active ?? 1,
        ]);

        foreach($files as $file){
            $path = $file->store('image-products', 'public');
            
            Images::create([
                'product_id' => $product->id,
                'path' => $path,
            ]);
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }
}
