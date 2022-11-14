<html>
<head>
	<title><?= $data ?></title>
	<link rel="stylesheet" href="rating.css">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="C:\xampp\htdocs\app\css\header.css">
</head>



<body>
	<style>
.container {
   /* width: 300px;
    margin: auto;*/
}

.logo {
    float: left;
}

.input-group {
    float: right;
}

search_term{
	float: ;
}
	</style>
	<div class='container'>
		<div class='logo'>
			<a href='/Main/index'><img src="/images/workshop.png" style="max-height: 250px;" style="max-width: 250px;" /></a>
		</div>

		<div class="input-group">
		<form action="/Main/search" method="get" style='display:inline-block'>					
			    <input type="search" name='search_term' class="form-control" placeholder="Enter search term" />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>	
		</form>
		

		<?php
		if(!isset($_SESSION['user_id'])){?>
			<a href="/User/index"><i style="font-size: 2rem;" class='bi-door-closed' title="Log in"></i></a>
<?php	}else{ ?>
			<a href="/User/logout"><i style="font-size: 2rem;" class='bi-door-open' title='Log out'></i></a>
<?php	}
		?>

		<a href='/Product/create'><i style="font-size: 2rem;" class='bi-plus-square' title='Add Product'></i></a>
		<a href='/Profile/index'><i style="font-size: 2rem;" class='bi-file-earmark-person' title='My Profile'></i></a>		
		</div>
	</div>
