<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/CSS/style.css">

	<title>Login</title>

	<style>

		body{
			background-color:peachpuff;
			height: 100%;
		}
		.logo{
			width: 250px;
			height: 75px;
			border-radius: 30%;
			margin: 0 auto;
			margin-bottom: 10px;
		}

		.logo img{
			width: 100%;
		}

		.title{
			width: 100%;
			background-color: rgb(122, 122, 212);
			color: white;
			justify-content: center;
			margin-bottom: 1.5rem;
			margin-top: 35px;
		}

		h5{
			font-weight: 600;
			text-align: center;
			justify-content: center;
		}

		.login{
			margin: 100px auto;
			width: 350px;
			padding: 30px;
			background-color: #ffefe0;
		}

		form{
			margin-top: 30px;
    		width: 100%;
    	}

    	input{
    		font-size: 18px;
    		padding: 10px 20px 10px 5px;
			border: none;
			font-size: 10px;
			border-radius: 20px;
    	}

    	#btnLogin{
    		width: 100%;
    		padding: 12px 10px;
    		border: none;
    		font-size: 18px;
    		border-radius: 20px;
    	}

    	footer{
    		background-color: #333333;
    		width: 100%;
    	}

    	footer h4{
    		color: white;
    	}
    	
	</style>

</head>

<body>

	<?php
		if(isset($_GET['error'])){ ?>
	<div class="alert alert-danger" role="alert">
	  <?= $_GET['error'] ?>
	</div>
	<?php	}
	?>


	<?php
		if(isset($_GET['message'])){ ?>
	<div class="alert alert-success" role="alert">
	  <?= $_GET['message'] ?>
	</div>
	<?php	}
	?>

	<div class="login">
		<div class="logo">
			<img src="/Images/Work.png">
		</div>
		<div class="title"><h5>Welcome to the Login page</h5></div>
			<form action="" method="post">
				<input type="text" name="username" class="form-control"
				id="username" placeholder="Enter Username"><br>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"><br>
				<input type="submit" name="action" id="btnLogin" value="Login" class="btn btn-primary">
			</form>
	</div>
	<div class="register_form">
		<a href="/User/register">REGISTER HERE !!</a>
	</div>
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
		
	
</body>

</html> 