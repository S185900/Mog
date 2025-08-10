<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Season;
use App\Http\Controllers\ProductController;


// 商品一覧ページ
// Route::get('/products', [ProductController::class, 'index']);
Route::get('/products', function () {
    $product = Product::paginate(6);
    return view('index', compact('product'));
});


// 商品登録画面
Route::get('/products/register', function () {
    return view('create');
});




// public function index()
//   {
//     $products = Product::simplePaginate(6);
//     return view('index', ['product' => $products]);
//   }
// Route::view('/products', 'index');
// Route::view('/products', 'index')->paginate(6);


// Route::get('/products', function () {
//     return view('products.index');
// });
