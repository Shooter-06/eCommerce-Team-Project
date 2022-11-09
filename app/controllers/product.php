<?php
namespace app\controllers;

class product extends app\core\Controller{
	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('Product/details', $products);
	}	


	//#[\app\filters\Login]
	//#[\app\filters\Profile]
	public function create(){

		if(isset($_POST['action'])){
			//make a new object
			$product = new \app\models\Product();
			
			$product->product_id = $_POST['product_id'];
			$product->profile_id = $_SESSION['profile_id'];
			$product->title = $_POST['title'];
			$product->description = $_SESSION['description'];
			$product->price = $_POST['price'];

			
			$filename = $this->saveFile($_FILES['picture']);
			if($filename){
				$product->picture = $filename;
				$product->insert();
				header('location:/Profile/index/');
			}else{
				header('location:/product/create/');
			}
			
		}else{
			$this->view('product/create');
		}
	}


}