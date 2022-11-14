<html>

<head>
	<title><?= $data ?></title>
	<link rel="stylesheet" href="rating.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
</head>

<body>
	<p>Our stock Inventory.</p>
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