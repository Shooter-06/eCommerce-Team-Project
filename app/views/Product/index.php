
<body>
	<style>
		.info{
			margin: 0 auto 20px auto;
		    padding: 5px 10px 5px 15px;
		    display: flex;
		    width: 75%;
		    background-color: rgb(122, 122, 212);
		    color: white;
		    font-size: 17px;
		    justify-content: center;
		}

		h3{
			align-items: center;
			justify-content: center;
			display: flex;
			margin-right: 300px;
			font-family: 'Times New Roman', Times, serif;
		}	
	</style>
	<div class="info">
		<h3>Our stock Inventory</h3>
	</div>
	
	<div class="product_index">

		<?php
		foreach($value as $products){
			$products= $this->getAll();
		}?>

		<a href="/Profile/index/<?=$profile->profile_id ?>"></a>
		<?php 
			if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){

			$products= $data->getReviews();
		}
	?>	

	<p>Say something about the products</p>
	<form action='/Review/add/<?=$data->review_id?>' method="post">
	<div class="review">
		<input class='form-control' type="text" name="review" placeholder="Say something" />
	<button type="submit" name='action' class='btn btn-primary'><i class='bi-send'></i></button>
	</div></form>

	</div>


	<a href="/Product/create" class= "backBtn">Add a new Product</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/User/index" class= "backBtn">Logout</a>
	<br>


</body>
<footer>
	<?php $this->view('footer'); ?>
</footer>
</html>