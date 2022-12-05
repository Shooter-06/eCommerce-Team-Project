<?php
namespace app\controllers;

class Category extends \app\core\Controller{


	public function index(){
		$category= new \app\models\Category();
		$categorys= $category->getAll();

		$category= new \app\models\Category();
		$category_cart= $category->getCart();

		$this->view('Category/index',['Category'=>$categorys, 'emptyCat'=>$emptyCat])
	}

	#[\app\filters\Login]
 	public function add(){
		if($_POST['category_id']){
			
			$category= new \app\models\Category();
			$category->$category->getName($category_id);
			$category->insert();

			header("location:/Product/createCategory?Create a new category");
		}else if($category != null && $_POST['category_id']=''){
				header('location:/Category/index?error=Category name already taken or it can be empty');
		}else {
			$this->view('Category/index');
		}
	}


	#[\app\filters\Login]
 	public function edit($category_name, $category_id){
		if($name == 'null'){
			header('location:/Category/index?error=Category name cannot be blank');
		} else{
			$category= new \app\models\Category();
			$category = $category->getName($category_name);

			if($category != null){
				header('location:/Category/index?error=Category name already taken');
			} else{
				$category= new \app\models\Category();
				$category = $category->get($category_id);
				$category->category_name = $category_name;
				$category->update();
				header('location:/Category/index');
			}
		}	
	}


	#[\app\filters\Login]
	public function remove($category_id){
			$category = new \app\models\Category();
			$category = $category->get($category_id);

			$product = new \app\models\Product();
			$products = $product->getCartProducts($category_id);

			if($items != null){
				header('location:/Category/index?error=Cannot delete, still items in category');
			} else{
				$category->delete();
				header('location:/Category/index?error=Category Deleted');
			}	
	 }
}