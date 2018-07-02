<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Http\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

  public function index() {
    $product = new Product();
    if (Auth::check()) {
      $user = User::where('id', Auth::id())->first();
      return view('products', ['products' => $product->getProducts(), 'email' => $user->email]);
    }
    return view('products', ['products' => $product->getProducts()]);
  }

  public function productDetail($id) {
    $product = new Product();
    $proModel = $product->productDetail($id);
    return view('product_detail', ['product' => $proModel, 'related' => $product->getRandomProducts($id)]);
  }

}
