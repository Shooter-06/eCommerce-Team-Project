<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getALL(){
		$SQL = "SELECT * FROM cart"
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute();
		return $STMT->fetchAll();
	}

	public function emptyCart(){
		unset($_SESSION["cart_item"]);
	}
}