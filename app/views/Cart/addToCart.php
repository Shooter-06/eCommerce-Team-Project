<?php $this->view('header', 'Workshop');?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>

		body{
			background-color:#FFFFFF;
		}
		h1{
			font-size: 30px;
    		font-family: "Times New Roman", Times, serif;
			
		}
		p{
			font-size: 20px;
    		font-family: "Times New Roman", Times, serif;	
		}
	</style>
</head>

<body>
	
	<h1><center><big>The cart</big></center></h1>

	<?php if($carts){?>
		<form method="post" action="/Product/create">

			foreach()
			
			<?php
				// $subTotal = 0;
    //             $discount = 0;
                foreach ($carts as $cart) {
                	$totalPrice = $totalPrice->qty *$cart->price;
                	?>

                	<tr>
                		
                		<td>
                			<div class="row">
	                			<div class="col-sm-2"><img src="<?php echo "Images/" . $cart->image; ?>"width="50" height="50"/>
	                			</div>

	                			<div class="col-sm-10">
	                                    <a href="/Product/indexPProducts/<?php echo $cart->product_id; ?>"><?php echo $cart->produc_id; ?></a>
	                                    <br />
	                                    <br />
	                                    <a href="/Cart/delete/<?php echo $cart->cart_id; ?>" onclick="return confirm('Are you sure want to delete it?')" class="text-danger">Delete</a>
	                            </div>
	                        </div>

                		</td>


                	</tr>

                <?php } ?>
                
		</form>

	<?php } ?>




	<br><br><br>

	<a href=<?php echo '"/Product/create/'.$_SESSION['profile_id'].'"';?> class= "backBtn">Add a new Product to your inventory</a>
	<br>
	<a href="/Profile/index" class= "backBtn">Return to the your profile</a>
	<br>
	<a href="/Main/index" class= "backBtn">Logout from your profile</a>
	
</body>
