<body>
	<style>
		.info{
		    width: 100%;
		    background-color: rgb(122, 122, 212);
		    color: white;
		    justify-content: center;
		    margin-bottom: 1.5rem;

		}

		#home{
			background-image: url("/Images/workshop.png");
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: top center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: flex-start;
		}

		.product{
			cursor: pointer;
			margin-bottom: 2rem;
		}

		.product:hover img{
			opacity: 0.7;
		}

		.product img{
			transition: 0.3s all;
		}

		.shop_contents{
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(220px,auto));
			gap: 1.5rem;
		}

		.product_box{
			position: relative;
		}

		.product_box:hover{
			opacity: 0.7;
			padding: 10px;
			border: 1px solid var(--text-color);
			transition: 0.4s;
		}

		.img-fluid{
			width: 100%;
			height: auto;
			margin-bottom: 0.5rem;
		}

		.product_title{
			font-size: 1.1rem;
			font-weight: 600;
			text-transform: uppercase;
			margin-bottom: 0.5rem;
		}

		h5{
			font-weight: 600;
			text-align: center;
			justify-content: center;
		}

		i{
			cursor: pointer;
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
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/airmax.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
					</div>	
				</div>
				
			</div> <div class="product_box text-center"> <div class="card">
			<img class="img-fluid" src="/Images/bluewhitenike.jpg"> <div
			class="card-contents"> <h2 class="product_title">Kyrie 6
			Low</h2> <span class="price">$164.99</span><br> <button
			class="btnpurchase">Buy Now</button> <i class="fa-sharp
			fa-solid fa-cart-shopping"></i> </div>	 </div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/redwhite.jpg">
					<div class="card-contents">
						<h2 class="product_title">Kyrie 6 Low</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase">Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
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