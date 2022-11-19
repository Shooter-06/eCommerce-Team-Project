<html>
<head>
	<title><?= $data ?></title>
	<link rel="stylesheet" href="rating.css">
	<link rel="shortcut icon" type="image/png" href="Images/favicon-32x32.png">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="C:\xampp\htdocs\app\css\header.css">
	<link rel="stylesheet" href="app\CSS\site.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
</head>



<body>
	<!-- <style>

		.logo {
		    float: left;
		}

		.input-group {
		    float: right;
		    align-items: center;
		    justify-content: center;
		    flex-wrap: wrap;
		    margin: 10px;
		    padding: 2px;
		}

		html{
    		background-color: peachpuff;
    		font-family:Arial, Helvetica, sans-serif;
		}

		body{
		    background-color: rgb(250, 222, 198);
		}
		


	</style>
 
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">LOG IN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">POST PRODUCT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MY PROFILE</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

	<!-- <div class='container'>
		<div class='logo'>
			<a href=''><img src="/images/workshop.png" style="max-height: 250px;" style="max-width: 250px;" /></a>
		</div>

		<div class="input-group">
		<form action="/Main/search" method="get" style='display:inline-block'>					
			    <input type="search" name='search_term' class="form-control" placeholder="Enter search term" />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>	
		</form>
		

		<?php
		if(!isset($_SESSION['user_id'])){?>
			<a href="/User/index"><i style="font-size: 2rem;" class='bi bi-file-person-fill' title="Log in"></i></a>

		<?php	}else{ ?>
			<a href="/User/logout"><i style="font-size: 2rem;" class='bi-door-open' title='Log out'></i></a>
		<?php	}
		?>

		<a href='/Product/create'><i style="font-size: 2rem;" class='bi bi-broadcast' title='Add Product'></i></a>
		<a href='/Profile/index'><i style="font-size: 2rem;" class='bi bi-info' title='My Profile'></i></a>
		<a href='/Cart/addToCart'><i style="font-size: 2rem;" class='bi bi-cart-fill' title='Check Your Cart'></i></a>		

		</div>
	</div> -->
</body>