<?php
namespace app\controllers;

class cart extends \app\core\Controller{

	public function inndex(){
		echo"empyt cart";
	}

	public function index(){

		$cart = new \app\models\Cart(); 
	}

	public function remove(){
		if(!empty($_SESSION["cart_item"])){
			foreach ($_SESSION["cart_item"] as $key => $value) {
				if($_GET["key"==$value]){
					unset($_SESSION["cart_item"][$value]);
				}
				if(empty($_SESSION["cart_item"])){
					unset($_SESSION["cart_item"][$value]);
				}
			}
		}
	}

	public function addToCart($product_id){
		// if(isset($_SESSION["cart"])){

			$cart = new \app\models\cart();
			$product = new \app\models\Product();
			$products = $product->get($product_id);

			$cart->user_id = $_SESSION['user_id'] ;
			
			$cart->product_id = $product_id;
			$cart->price = $products->price;
            $cart->insertProductToCart();
				
			$profile= $_SESSION['profile_id'];

            header("location:/cart/index");

	}

	public function emptyCart(){
		unset($_SESSION["cart_item"]);
	}

	public function delete($cart_id)
    {
        $cartModel = new \app\models\Cart();
        $cartModel->delete($cart_id);
        header("location:/Cart/index");
    }

    public function update($cart_id)
    {
        $cart = new \app\models\Cart();
        $cart->qty = $_POST['qty'];
        $cart->update($cart_id);
    }
}