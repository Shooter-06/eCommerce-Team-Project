<head>
	<link rel="stylesheet" type="text/css" href="/CSS/style.css">
</head>
<body>

	<div class="info">
		<h5>Our stock Inventory</h5>
	</div>

	<section class="shop_container">
		<div class="shop_contents mx-auto container-fluid">
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/yellownike.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<!-- <td type= action><a href='/Product/delete/$item->product_id'> delete</a></td> -->
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/airmax.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Lowwww</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
						<i class="fa-sharp fa-solid fa-cart-shopping" href="/Cart/productsCart"></i>
					</div>	
				</div>
			</div> 
			<div class="product_box text-center"> 
				<div class="card">
					<img class="img-fluid" src="/Images/bluewhitenike.jpg"> 
					<div class="card-contents"> 
						<h2 class="product_title">Kyrie 6 Low</h2> 
						<span class="price">$164.99</span><br> 
						<button class="btnpurchase">Buy Now</button> 
						<i class="fa-sharp fa-solid fa-cart-shopping"></i> 
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
					</div>	 
				</div>
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/redwhite.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/greynike.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/yellownike.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-trash"></i>
						<i class="fa-solid fa-pen-to-square"></i>
					</div>	
				</div>
				
			</div>
		</div>
	</section>

	<!-- <section id="featured">
		<div class="row mx-auto container-fluid">
			<div class="product text-center col-lg-3 col-md-4 col-12">
				<img class="img-fluid mb-3" src="/Images/kyrie.jpg">
				<h5 class="proName">Kyrie 6 Low</h5>
				<h4 class="proPrice">$164.99</h4>
				<button class="btnpurchase">Buy Now</button>
			</div>
		</div>
		<div class="row mx-auto container-fluid">
			<div class="product text-center col-lg-3 col-md-4 col-12">
				<img class="img-fluid mb-3" src="/Images/dunno.jpg">
				<h5 class="proName">Something Dunks Low</h5>
				<h4 class="proPrice">$49.99</h4>
				<button class="btnpurchase">Buy Now</button>
			</div>
		</div>
	</section> -->


	
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
	<a href="/Profile/create" class= "backBtn">Create a profile</a>
	<br><br><br><br><br><br><br>

</body>

<footer>
	<p>this project was developed by:</p>
	<?php $this->view('footer'); ?>

<footer class="mt-2 py-1">
	 <div class="row container mx-auto pt-1">
	 	<div class="footer-one col-lg-3 col-md-6 col-12">
	 		<img src="/Images/Work.png" style="max-width: 250px;" style="max-height: 250px;">
	 	</div>
	 	<div class="footer-one col-lg-3 col-md-6 col-12">
	 		<h4 class="pb-2">Creators</h4>
	 		<ul class="text-uppercase list-unstyled">
	 			<li><a href="https://github.com/Shooter-06" target="-blank">Fiacre</a></li>
	 			<li><a href="https://github.com/Vincent-C3" target="-blank">Nam</a></li>
	 			<li><a href="https://github.com/BakaDobe" target="-blank">De Andre</a></li>
	 		</ul>
	 	</div>
      
    </div>

</footer>
</html>