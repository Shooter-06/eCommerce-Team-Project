
<body>
	<style>
		h3{
			align-items: center;
			justify-content: center;
			display: flex;
			margin-right: 300px;
			font-family: 'Times New Roman', Times, serif;
		}	
	</style>

	<h3>Our stock Inventory</h3>
	<div class="product_index">
		<?php $products= $data->getAll();?>		
		<a href="/Profile/index/<?=$profile->profile_id ?>">

		<?php 
			if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){

			$products= $data->getReviews();
		}
	?>	

	<form action='/Review/add/<?=$data->review_id?>' method="post">
	<div class="review">
		<input class='form-control' type="text" name="review" placeholder="Say something" />
	<button type="submit" name='action' class='btn btn-primary'><i class='bi-send'></i></button>
	</div></form>

	</div>


	<a href="/Product/create" class= "backBtn">Add a new Product</a>
	<a href="/User/index" class= "backBtn">Logout</a>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>

</body>
<footer>
	<?php $this->view('footer'); ?>
</footer>
</html>