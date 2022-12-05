<?php
namespace app\models;

class Cart extends \app\core\Model{

	public function getALL(){
		$SQL = "SELECT * FROM cart"; 
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	// public function insert(){
	// 	$SQL = "INSERT INTO cart ($product_id)
 //         VALUES(:user_id,:product_id,:qty, :price)";
 //        $STMT = self::$_connection->prepare($SQL);
 //        $STMT->execute(['user_id' => $user,'product_id' => $product_id,'qty' => $this->qty, 'price' => $this->price]);
	// }

	public function insertProductToCart()
    {
        $SQL = "INSERT INTO cart (user_id, product_id, price)VALUES(:user_id,:product_id, :price)";
       $STMT = self::$_connection->prepare($SQL);
       $STMT->execute(['user_id' => $this->user_id,'product_id' => $this->product_id, 
       	'price' => $this->price]);
    } 


	public function getAllProfileProduct(){
		$SQL = "SELECT * FROM cart WHERE product_id=:product_id and profile_id=:profile_id"; 
		$STMT=self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id' => $profile_id, 'product_id' => $product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	// public function getProfile(){
	// 	$SQL = "SELECT * FROM cart WHERE profile_id=:profile_id"; 
	// 	$STMT=self::$_connection->prepare($SQL);
	// 	$STMT->execute(['profile_id' => $profile_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
	// 	return $STMT->fetchAll();
	// }

	public function update($cartId)
    {
        $SQL = "UPDATE cart SET qty=:qty where cart_id=:cart_id ";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['qty' => $this->qty,'cart_id' => $cartId]);
    }

    public function delete($cartId)
    {
        $SQL = "DELETE FROM cart where cart_id=:cart_id ";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id' => $cartId]);

    }
}