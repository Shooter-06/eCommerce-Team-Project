<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>

		body{
			background-color:#ffcccb;
		}
		h1{
			font-size: 30px;
    		font-family: "Times New Roman", Times, serif;
			
		}
		p{
			font-size: 20px;
    		font-family: "Times New Roman", Times, serif;	
		}

/*
	    button{
	    	font-family: "Times New Roman", Times, serif;
				position: absolute;
				text-align: absolute;
				margin-top: 350px;
				margin-left: 40%;
	    	width: 300px;
	    }

	   	.register_form{
	   		font-family: "Times New Roman", Times, serif;
			position: absolute;
			text-align: absolute;
			margin-top: 400px;
			margin-left: 40%;
	    	width: 300px;
	   	}

	   	a:hover{
	    	text-decoration: none;
	    }*/
	</style>


</head>
<body>

	<h1><center><big>Welcome to our inventory of your profile</big></center></h1>

	<p> As a new seller, you have no items to sell.</p>
	<br>
	<p>Make sure you add on your items!!.</p>
	<p>Your inventory is empty</p>

	<img src="/images/empty.PNG" style="max-height: 250px;" style="max-width: 250px;">
	<!-- <img src="/images/workshop.png" style="max-height: 250px;" style="max-width: 250px;" /> -->

	<br>


	<br><br>
	<a href="/Product/create" class= "backBtn">Add a new Product to your inventory</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/Product/index" class= "backBtn">Logout from your profile</a>

		

</body>
<footer>
	<?php $this->view('footer'); ?>
</footer>

</html>