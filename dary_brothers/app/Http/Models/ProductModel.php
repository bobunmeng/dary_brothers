<?php namespace App\Http\Models;

class ProductModel {

  public $title = "";
  public $image_paths = array();
  public $price = 0;

  public function __construct($title, $image_paths, $price) {
    $this->title = $title;
    $this->image_paths = $image_paths;
    $this->price = $price;
  }

  public function pro_price() {
    return "Price: $" . money_format('%i' , $this->price);
  }

  public function pro_images() {
    $img_array = array();
    foreach ($this->image_paths as $path) {
      array_push($img_array, "/storage/$path");
    }
    return $img_array;
  }

}
