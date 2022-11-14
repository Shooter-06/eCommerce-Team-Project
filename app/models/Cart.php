<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getALL(){
		$SQL = "SELECT * FROM cart"
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute();
		return $STMT->fetchAll();
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

	public function emptyCart(){
		unset($_SESSION["cart_item"]);
	}
}