<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use App\User;
use App\Http\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

  public function index() {
    if (Auth::check()) {
      $user = User::where('id', Auth::id())->first();
      return view('products', ['products' => $this->getProducts(), 'email' => $user->email]);
    }
    return view('products', ['products' => $this->getProducts()]);
  }

  private function getProducts() {
    $products = array();
    $pros = Product::all();
    foreach($pros as $p) {
        $img_array = $this->getImagesForProduct($p->images);
        $proModel = new \App\Http\Models\ProductModel($p->en_name, $img_array, $p->price);
        array_push($products, $proModel);
    }
    return $products;
  }

  private function getImagesForProduct($pro_image) {
    $images = Image::find($this->getImageArray($pro_image));
    $img_array = array();
    foreach ($images as $img) {
      array_push($img_array, $img->resource);
    }
    return $img_array;
  }

  private function getImageArray($imgStr) {
    return explode(',', $imgStr);
  }

}
