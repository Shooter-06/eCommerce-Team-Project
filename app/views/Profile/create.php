<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

	<title>Register a new Profile</title>

	<style>

		body{
			background-color:peachpuff;
			height: 100%;
		}

		.logo{
			width: 250px;
			height: 75px;
			border-radius: 30%;
			margin:0 auto;
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

		.pregister{
			margin: 100px auto;
			width: 350px;
			padding: 30px;
			background-color: #ffefe0;
		}

		form{
			width: 100%;
			margin-top: 30px;
		}

		input{
			font-size: 18px;
	   		padding: 20px 30px 20px 10px;
	   		border: none;
	   		outline: none;
	   		display: block;
	   		background: none;
		}


	    .backBtn{
	    	box-shadow: 3px 4px 0px 0px #8a2a21;
	    	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
				background-color:#c62d1f;
				border-radius:18px;
				border:1px solid #d02718;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family:Arial;
				font-size:17px;
				padding:7px 25px;
				text-decoration:none;
				text-shadow:0px 1px 0px #810e05;
	   	}
	   	.backBtn:hover{
	   		background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
				background-color:#f24437;
	   	}
	   	.backBtn:active{
	   		position:relative;
				top:1px;	
	   	}


	   	
	   	.LoginBtn{
	    	box-shadow: 3px 4px 0px 0px #8a2a21;
	    	background:linear-gradient(to bottom, #00FF00 5%, #f24437 100%);
				background-color:#00FF00;
				border-radius:18px;
				border:1px solid #d02718;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family:Arial;
				font-size:17px;
				padding:7px 25px;
				text-decoration:none;
				text-shadow:0px 1px 0px #810e05;
	   	}
	   	.LoginBtn:hover{
	   		background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
				background-color:#f24437;
	   	}
	   	.LoginBtn:active{
	   		position:relative;
				top:1px;	
	   	}


	   	#btnPRegister{
	    	width: 100%;
	    	padding: 12px 10px;
	    	border: none;
	    	font-size: 18px;
	    	border-radius: 20px;
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

	<div class="pregister">
		<div class="logo">
			<img src="/Images/Work.png">
		</div>
		<div class="title"><h5>Sign Up with the correct inputs</h5></div>
		<form action="" method="">
			<input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class="form-control">
			<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class="form-control">
			<input type="text" name="address" id="address" placeholder="Enter Address" class="form-control">
			<input type="text" name="city" id="city" placeholder="Enter City" class="form-control">
			<input type="text" name="postal_code" id="postal_code" placeholder="Enter Postal Code" class="form-control">
			<input type="text" name="password" id="password" placeholder="Enter Password" class="form-control">
			<input type="text" name="password_confirmation" id="passwordConf" placeholder="Enter Password Confirmation" class="form-control">
			<input type="submit" name="action" id="btnPRegister" value="Register" class="btn btn-primary"	>
		</form>
	</div>

	<a href="/Product/index" class= "backBtn">BACK</a>
	<a href="/Profile/details" class= "LoginBtn">Login</a>

	<!-- <footer>
		<?php $this->view('footer'); ?>
	</footer> -->
		
</body>
</html>