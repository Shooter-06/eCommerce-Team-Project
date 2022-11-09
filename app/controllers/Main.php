<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$products->new \app\models\Product();
		$products->$product->getAll();
		$this->view('Main/index', $products);
	}

	public function search(){
		
		$productsFind = new \app\models\Product();
		$productsFind = $productsFind->search($_GET['searching']);
		$this->view('Main/index', $productsFind);
	}
}