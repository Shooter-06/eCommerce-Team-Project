<?php
namespace app\controllers;

class cart extends \app\core\Controller{
	public function getALL(){
		$SQL = "SELECT * FROM cart"
		$STMT=self::$_connection->prepare($SQL)
	}
}

//