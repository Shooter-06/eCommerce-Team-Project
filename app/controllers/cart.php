<?php
namespace app\controllers;

class cart extends \app\core\Controller{

	public function inndex(){
		echo"empyt cart";
	}

	public function index(){

		$cart = new \app\models\Cart();
        //$carts = $cart->getProfile();
       // $code = '';
        
        //require 'app/views/Product/productsCart.php';
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
			//echo var_dump($products);
			//echo $_SESSION['user_id'];
			$cart->user_id = $_SESSION['user_id'] ;
			
			$cart->product_id = $product_id;
			$cart->price = $products->price;
            $cart->insertProductToCart();
				

			// if ($cartobjects) {
   //              $cart->qty = $checkCart->qty + $_POST['qty'];
   //              $cart->updateById($checkCart->cart_id);

   //          } 
   //          else {
   //              $cart->profile_id = $profile_id;
				//c
             
            


 //            public function addToCart($product_id){
	// 		$cart = new \app\models\Cart();

	// 		// $cart->product_id = $_SESSION['product_id'];
	// 		$cart->product_id = $product_id;
	// 		$cart->user_id = $_SESSION['user_id'] ;
	// 		//$cart = $cart->getUserId($_SESSION['user_id']);
	// 		// $cart->user_id = $_SESSION['user_id'];
	// 		// $_SESSION['cart_id'] = $cart->cart_id;
	// 		$cart->insertProductToCart();
	// 		header('location:/User/home?message=Added to cart');
	// }



            header("location:/cart/index");


		// 	if(!in_array($_GET['id'], $product_id)){
		// 		$count = count($_SESSION['cart']);
		// 		$products = array('product_id' => $_GET['id'],
		// 							'title' => $_GET['title'],
		// 							'description' => $_GET['description'],
		// 							'price' => $_GET['price']);
		// 		$_SESSION['cart'][$count] =$products;
		// 	}else{
		// 		header("location:/Cart/productsCart?this item exist in the cart already");
		// 		$this->view('Cart/productsCart');
		// 	}
		// }else{
		// 	$products = array('product_id' => $_GET['id'],
		// 							'title' => $_GET['title'],
		// 							'description' => $_GET['description'],
		// 							'price' => $_GET['price']);
		// 	$_SESSION['cart'][0] =$products;
		// }
        
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