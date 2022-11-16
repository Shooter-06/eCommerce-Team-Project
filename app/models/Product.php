<?php
namespace app\models;

class Product extends \app\core\Model{
	public function search($searching){
		$SQL ="SELECT * FROM Product WHERE description LIKE :searching";
		$STMT = self::$_connection->prepare($SQL);
		$STMT = execute(['searching'=>"%$searching%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function addToCart(){
		if(!empty($_SESSION["quantity"])){
			$SQL ="SELECT * FROM Product WHERE product_id=:product_id/*, profile_id=:profile_id, title=:title, description=:description, price=:price*/ ";
			$itemsArray= array($SQL[0]["key"] => array('profile_id'=>$SQL[0]["profile_id"], 'title'=>$SQL[0]["title"], 'description'=>$SQL[0]["description"], 'price'=>$SQL[0]["price"], 'quantity'=>$_POST["quantity"]));

			if(!empty($_SESSION["cart_item"])){
				if(in_array($SQL[0]["key"], array_keys($_SESSION["cart_item"]))){
					foreach ($_SESSION["cart_item"] as $key => $value) {
						if($SQL[0]["key"] ==$value){
							if(empty($_SESSION["cart_item"][$value]["quantity"])){
								$_SESSION["cart_item"][$value]["quant
								ity"]=0;
							}
							$_SESSION["cart_item"][$value]["quantity"] += $_POST["quantity"];
						}
					}
				}else{
					$_SESSION["cart_item"] =array_merge($_SESSION["cart_item"],$itemsArray);
				}
			}else{
				$_SESSION["cart_item"]=$itemsArray;
			}
		}
	}

	public function __toString(){
		return "$this->profile_id $this->title $this->description $this->price";
	}

	public function get($product_id){
		$SQL ="SELECT * FROM product WHERE product_id=:product_id";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function getAll(){
		$SQL ="SELECT * FROM product";
		$STMT= self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO product(profile_id, title, description, price) VALUES (:profile_id, :title, :description, :price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id,
						'title'=>$this->title,
						'description'=>$this->description,
						'price'=>$this->price]);
		return self::$_connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE product SET profile_id=:profile_id, title=:title, description=:description WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id,
						'title'=>$this->title,
						'description'=>$this->description,
						'price'=>$this->price,
						'product_id'=>$this->product_id]);
	}

	public function delete(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
	}
}