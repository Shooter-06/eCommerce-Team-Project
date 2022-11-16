<?php
namespace app\controllers;

class cart extends \app\core\Controller{
	public function getALL(){
		$SQL = "SELECT * FROM cart";
		$STMT=self::$_connection->prepare($SQL);
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

	public function addToCart(){
		if(isset($_SESSION["shooping_cart"])){
			$product_id=array_column($_SESSION["shooping_cart"], "product_id");
			if(!in_array($_GET['id'], $product_id)){
				$count = count($_SESSION['shooping_cart']);
				$products = array('product_id' => $_GET['id'],
									'title' => $_GET['title'],
									'description' => $_GET['description'],
									'price' => $_GET['price']);
				$_SESSION['shooping_cart'][$count] =$products;
			}else{
				header("location:/Cart/productsCart?this item exist in the cart already");
				$this->view('Cart/productsCart');
			}
		}else{
			$products = array('product_id' => $_GET['id'],
									'title' => $_GET['title'],
									'description' => $_GET['description'],
									'price' => $_GET['price']);
			$_SESSION['shooping_cart'][0] =$products;
		}
	}
}