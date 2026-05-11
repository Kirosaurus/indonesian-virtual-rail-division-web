<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Products; 

class ProductsFreewareController extends Controller
{
    public function index(Request $request)
    {
        $query = Products::where('type', 'freeware')->with(['images', 'tags']);

       if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%");
        }

        // Sort functionality
        if ($request->has('sort_by')) {
            if ($request->sort_by === 'price') {
                $query->orderBy('price', $request->order ?? 'ASC');
            } elseif ($request->sort_by === 'name') {
                $query->orderBy('name', $request->order ?? 'ASC');
            }
        }

        $products = $query->where('type', 'freeware')->get();

        // Jika request dari AJAX, return JSON
        if ($request->ajax()) {
            return response()->json($products);
        }

        // Jika request normal, return view
        return view('freeware', ['products' => $products]);
    }
}
