<?php
namespace app\controllers;

class Category extends \app\core\Controller{

	#[\app\filters\Login]
 	public function add(){
		if(isset($_POST['action'])){
			
			$category= new \Sys_Dev_Project\models\Category();
			$category->category_name = $_POST['name'];
			$category->insert();

			header("location:/Product/create?Create a new category with your items to sale");
			$this->view('Category/add');
		}
	}
}