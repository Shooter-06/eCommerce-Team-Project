<!-- <?php $this->view('header', 'Workshop'); ?>

<p>Welcome to our invenotry.</p>

<?php $this->view('Product/details'); ?> <!-- this will help the user to navigate through the products. -->

<?php $this->view('/Product/create'); ?> <!-- create a profile after seeing the inventory -->

<?php $this->view('/User/index'); ?> <!-- logout out -->



	<h1>Welcome to the Product inventory.</h1>

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
		<?php $this->view('footer'); ?>
	</footer>
</body>



///////////////////////



<?php $this->view('header', 'Instasham'); ?>

<h1>Welcome to the Product inventory.</h1>

<!-- <a 'href=app/Product <?=$data->product_id?>'> Back </a> -->



<?php
	$product=$data->getAll();
	foreach ($product as $productsInfo) {
	$this->view('Product/index',$$products);
}

?>

<a href='/#Product<?=$data->product_id?>'>Back</a>

<?php $this->view('footer'); ?> -->