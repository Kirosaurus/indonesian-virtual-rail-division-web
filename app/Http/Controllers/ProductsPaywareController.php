<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsPayware;

class ProductsPaywareController extends Controller
{
    public function index()
    {
        $products = ProductsPayware::all();

        return view('payware', [
            'products' => $products
        ]);
    }
}
