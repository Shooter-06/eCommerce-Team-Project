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
						<h2 class="product_title">Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/<?=$product_id->product_id?>'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<!--<i class="fa-solid fa-trash"></i>-->
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<!-- <td type= action><a href='/Product/delete/$item->product_id'> delete</a></td> -->
					</div>	
				</div>
				
			</div>
			
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/airmax.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Max</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
					</div>	
				</div>
			</div> 
			<div class="product_box text-center"> 
				<div class="card">
					<img class="img-fluid" src="/Images/bluewhitenike.jpg"> 
					<div class="card-contents"> 
						<h2 class="product_title">Nike Air Blue</h2> 
						<span class="price">$164.99</span><br> 
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button> 
						<i class="fa-sharp fa-solid fa-cart-shopping"></i> 
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	 
				</div>
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/redwhite.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Red</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/greynike.jpg">
					<div class="card-contents">
						<h2 class="product_title">Running Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
				
			</div>
		</div>
		<div class="shop_contents mx-auto container-fluid">
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/beigecon.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<!--<i class="fa-solid fa-trash"></i>-->
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<!-- <td type= action><a href='/Product/delete/$item->product_id'> delete</a></td> -->
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe1.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Max</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
					</div>	
				</div>
			</div> 
			<div class="product_box text-center"> 
				<div class="card">
					<img class="img-fluid" src="/Images/shoe2.jpg"> 
					<div class="card-contents"> 
						<h2 class="product_title">Nike Air Blue</h2> 
						<span class="price">$164.99</span><br> 
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button> 
						<i class="fa-sharp fa-solid fa-cart-shopping"></i> 
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	 
				</div>
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe3.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Red</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe4.jpg">
					<div class="card-contents">
						<h2 class="product_title">Running Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
			</div>
		</div>
		<div class="shop_contents mx-auto container-fluid">
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe6.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<!--<i class="fa-solid fa-trash"></i>-->
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<!-- <td type= action><a href='/Product/delete/$item->product_id'> delete</a></td> -->
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe7.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Max</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
					</div>	
				</div>
			</div> 
			<div class="product_box text-center"> 
				<div class="card">
					<img class="img-fluid" src="/Images/shoe8.jpg"> 
					<div class="card-contents"> 
						<h2 class="product_title">Nike Air Blue</h2> 
						<span class="price">$164.99</span><br> 
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button> 
						<i class="fa-sharp fa-solid fa-cart-shopping"></i> 
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	 
				</div>
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe9.jpg">
					<div class="card-contents">
						<h2 class="product_title">Nike Air Red</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
				
			</div>
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe10.jpg">
					<div class="card-contents">
						<h2 class="product_title">Running Nike</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
			</div>
		</div>
		<div class="shop_contents mx-auto container-fluid">
			<div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe11.jpg">
					<div class="card-contents">
						<h2 class="product_title">Some Boots</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
			</div>
            <div class="product_box text-center">
				<div class="card">
					<img class="img-fluid" src="/Images/shoe5.jpg">
					<div class="card-contents">
						<h2 class="product_title">Some Boots</h2>
						<span class="price">$164.99</span><br>
						<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
						<i class="fa-sharp fa-solid fa-cart-shopping"></i>
						<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
						<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
					</div>	
				</div>
			</div>
			<div class="product_box text-center">
			<div class="card">
				<img class="img-fluid" src="/Images/boot.jpg">
				<div class="card-contents">
					<h2 class="product_title">Some Boots</h2>
					<span class="price">$164.99</span><br>
					<button class="btnpurchase" href='/Cart/productsCart/$item->product_id'>Buy Now</button>
					<i class="fa-sharp fa-solid fa-cart-shopping"></i>
					<i class="fa-solid fa-pen-to-square" href='/Product/edit/$item->product_id'></i>
					<i class="glyphicon glyphicon-trash" type=action href='/Product/delete/$item->product_id'></i>
				</div>	
			</div>
		</div>
		</div>
			
		
	</section>

	<nav aria-label="...">
	  <ul class="pagination">
	    <li class="page-item disabled">
	      <a class="page-link">Previous</a>
	    </li>
	    <li class="page-item active"><a class="page-link" href="#">1</a></li>
	    <li class="page-item" aria-current="page">
	    <li class="page-item disabled">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>


	
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

<!-- <footer>
	<p>this project was developed by:</p>
	<?php $this->view('footer'); ?> -->

<!-- <footer class="mt-2 py-1">
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

</footer> -->
</html>