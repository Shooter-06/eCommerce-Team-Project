<?php
namespace app\controllers;

class product extends \app\core\Controller{
	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('Product/details', $products);
	}	

	public function create(){

		if(isset($_POST['action'])){
			//make a new object
			$product = new \app\models\Product();
			
			// $product->product_id = $_POST['product_id'];
			// $product->profile_id = $_SESSION['profile_id'];
			$product->title = $_POST['title'];
			$product->description = $_POST['description'];
			$product->price = $_POST['price'];

			$product->profile_id=$_SESSION['profile_id'];
			
			$filename = $this->saveFile($_FILES['picture']);
			// if($filename){
			// 	$product->picture = $filename;
			// 	$product->insert();
				
			// 	header('location:/Profile/index/');
			// }else{
			// 	header('location:/product/create/');
			// }
			$product->insert();
			
		}else{
			$this->view('product/create');
		}
	}


	#[\app\filters\Login]
 	public function addToCart(){
		if(isset($_POST['action'])){
			
			$cartItem= new \app\models\Cart();
			$cartItems->cartItem = $_POST['quantity'];
			$cartItems->insert();

			header("location:/Product/create?Create a new category with your items to sale");
			$this->view('Category/add');
		}
	}
}