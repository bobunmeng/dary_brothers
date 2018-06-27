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

  public function productDetail($id) {
    $pro = Product::where('id', $id)->first();
    $img_array = $this->getImagesForProduct($pro->images);
    $proModel = new \App\Http\Models\ProductModel($pro->id, $pro->en_name, $pro->en_description, $img_array, $pro->price);
    return view('product_detail', ['product' => $proModel, 'related' => $this->getRandomProducts($id)]);
  }

  private function getProducts() {
    $products = array();
    $pros = Product::all();
    foreach($pros as $p) {
        $img_array = $this->getImagesForProduct($p->images);
        $proModel = new \App\Http\Models\ProductModel($p->id, $p->en_name, "", $img_array, $p->price);
        array_push($products, $proModel);
    }
    return $products;
  }

  private function getRandomProducts($id) {
    $products = array();
    $randProducts = Product::all()->random(5);
    foreach($randProducts as $rP) {
      if ($rP->id == $id) {
        continue;
      }
      $img_array = $this->getImagesForProduct($rP->images);
      $proModel = new \App\Http\Models\ProductModel($rP->id, $rP->en_name, "", $img_array, $rP->price);
      array_push($products, $proModel);
    }
    if (count($products) == 5) {
      return array_splice($products, 4);
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
