<?php
namespace app\controllers;

class cart extends \app\core\Controller{

	public function index(){
		$cart = new \app\models\Cart();
		$carts = $cart->getCartbyUserID($_SESSION["profile_id"]);
		$this->view('/Cart/productsCart', $carts);
	}

	public function addToCart($product_id){

			$cart = new \app\models\cart();
			$product = new \app\models\Product();
			$products = $product->get($product_id);
			//echo var_dump($products);
			//echo $_SESSION['user_id'];
			$cart->profile_id = $_SESSION['profile_id'] ;
			
			$cart->product_id = $product_id;
			$cart->price = $products->price;
            $cart->insertProductToCart();
			
            header("location:/cart/index");

        
	}


	public function delete($cart_id)
    {
        $cartModel = new \app\models\Cart();
        $cartModel->delete($cart_id);
        header("location:/Cart/productsCart");
    }

    public function update($cart_id)
    {
        $cart = new \app\models\Cart();
        $cart->qty = $_POST['qty'];
        $cart->update($cart_id);
    }
}