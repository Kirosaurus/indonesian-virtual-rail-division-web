<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class AdminCategoriesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'newCategory' => 'string'
        ]);

        $category = Categories::create([
            'name' => $request->newCategory
        ]);

        return response()->json([
            'id' => $category->id,
            'name' => $category->name,
        ]);
    }
}
