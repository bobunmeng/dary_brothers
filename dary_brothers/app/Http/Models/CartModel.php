<?php namespace App\Http\Models;

class CartModel extends ProductModel {

	public $quantity = 0;

	public function __construct($product, $qty) {
		parent::__construct($product->id, $product->title, $product->description, $product->image_paths, $product->price);
		$this->quantity = $qty;
	}

	public function pro_quantity() {
		return "Quantity: " . $this->quantity;
	}

	public function pro_totalPrice() {
		return 'Total: $' . $this->totalPrice();
	}

	private function totalPrice() {
		return $this->quantity * $this->price;
	}

}