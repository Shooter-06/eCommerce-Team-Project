<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

	<title>Register a new user</title>

	<style>

		body{
			background-color:#ffcccb;
		}
		h1{
			font-size: 30px;
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 20%;
    	width: 100%;
		}
		p{
			font-size: 30px;
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 20%;
    	width: 100%;
		}

		.username_form{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 30%;
    	width: 100%;
    }

    #username{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 10px;
			margin-left: 36%;
    	width: 400px;
    }

    .form-group2{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 45%;
    	width: 100%;
    }

    #password{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			margin-top: 10px;
			margin-left: 36%;
    	width: 400px;
    }

    .form-group3{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			top: 60%;
    	width: 100%;
    }

    #passwordConf{
    	font-family: "Times New Roman", Times, serif;
		  position: absolute;
		  margin-top: 10px;
		  margin-left: 36%;
    	width: 400px;
  	}

    button{
    	font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: center;
			margin-top: 500px;
			margin-left: 40%;
    	width: 300px;
    }
   	
   	a:hover{
    	text-decoration: none;
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


	<h1>Welcome to the Workshop Login Page:</h1>

	<form action='' method='post'>
		<div class="username_form">
			<label for="username">Username: </label>
    	<input type="text" class="form-control" id="username" name='username' placeholder="Enter the username">
		</div>

		<div class="password_form">
			<label for="password">Password: </label>
    	<input type="text" class="form-control" id="password" name='password' placeholder="Enter the password">
		</div>
		<br>

		<button type="submit" name='action' value='Register' class="btn btn-primary">Login</button>
		<br>
	</form>
	<p> If you wish to register 
		<a href="/User/index">REGISTER HERE !!</a> 
	</p>

	<footer>
		
	</footer>
</body>
</html>