<body>
	<style>
		.info{
		    display: flex;
		    width: 100%;
		    background-color: rgb(122, 122, 212);
		    color: white;
		    font-size: 18px;
		    justify-content: center;
		}
	</style>
	<div class="info">
		<h5>Our stock Inventory</h5>
	</div>
	
	<!-- <div class="product_index">

		<?php
		foreach($value as $products){
			$products= $this->getAll();
		}?>

		<a href="/Profile/index/<?=$profile->profile_id ?>"></a>
		<?php 
			if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){

			$products= $data->getReviews();
		}
	?>	 -->



	<div class="items">
		<div class="item-Listed">
			<img src="/Images/kyrie.jpg" alt="img" id="card-img">
			<p id="item-name">Kyrie 6 Low</p>
		</div>
		<div>
			<i class="fa fa-shopping-cart" id= add-to-cart></i>
			<h id="item-price">Price: $165</h>
		</div>
			
		</div>

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
	<p>this project was developed by:</p>
	<?=$this->view('footer');?>
</footer>
<!-- <footer>
	<?php $this->view('footer'); ?>
</footer> -->
</html>