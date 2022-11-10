<?php
namespace app\controlllers;

#[\app\filters\Login]
#[\app\filters\Profile]
class review extends app\core\Controller{
	public function index(){
				
	}

	public function add($product_id){
		if(isset($_POST['action'])){
			$review=new \app\models\Review();

			$review->review =$_POST['review'];
			$review->product_id=$product_id;
			$review->profile_id=$_SESSION['profile_id'];
			$review->review=$_POST['review'];
			$review->date=$_POST['date'];
			$review_id = $review->insert();
		}
		header("location:/Review/details");	
	}

	public function edit($review_id){
		$review=new \app\models\Review();

		$review=$review->getProduct($product_id);
		$review_id=$review->review_id;	

		if(isset($_POST['action'])){
			$review->review =$_POST['review'];
			$review->review=$_POST['review'];
			$review->date=$_POST['date'];
			$review_id = $review->update();
		}	
		header("location:/Review/details");	
	}

	public function delete($review_id){
		$review=new \app\models\Review();
		$review=$review->get($product_id);
		$review_id=$review->review_id;	

		if($review->product_id == $_SESSION['product_id']){
			$comment->delete();
		}

		header("location:/Review/details");	
	}

}