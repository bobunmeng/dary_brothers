<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use App\Http\Models\ProductModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

  public function index() {
    $products = array();
    $pros = Product::all();
    foreach($pros as $p) {
        $images = Image::find($this->getImageArray($p->images));
        $img_array = array();
        foreach ($images as $img) {
          array_push($img_array, $img->resource);
        }
        $proModel = new \App\Http\Models\ProductModel($p->en_name, $img_array, $p->price);
        array_push($products, $proModel);
    }
    return view('products', ['products' => $products]);
  }

  public function getImageArray($imgStr) {
    return explode(',', $imgStr);
  }

}
