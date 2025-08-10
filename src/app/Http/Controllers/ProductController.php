<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('index', ['product' => $product]);
    //     return view('product', compact('products'));

    // $product = Product::where('season', 'summer')->get(); // 必要に応じたフィルタリング
    }

    
}


