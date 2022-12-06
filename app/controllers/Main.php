<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$products =new \app\models\Product();
		$products=$products->getAll();
		$this->view('Main/index', $products);
	}

	public function search(){
		$productsFind = new \app\models\Product();
		$productsFind = $productsFind->search($_GET['searching']);
		$this->view('Main/index', $productsFind);
	}

	public function get($product_id){
		$SQL ="SELECT * FROM product WHERE product_id=:product_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function test(){
		echo "These";
		$this->view('Cart/productsCart');
	}
}