
<?php $this->view('header', 'Workshop'); ?>

<!-- <style type="text/css">
	.button {
	  background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	}

</style> -->

<h1>New product Info</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Picture:<input class='form-control' type="file" name="picture" id="picture" /></label>

	</div>

	<div class="products-inputs">
				
			<label>The Product id:<input type="text" name="name" /></label><br>
			<label>Profile_id:

				<select name="profile_id">
				<?php
					foreach ($data['profileIds'] as $profile) {
						echo "<option value='$profile->profile_id'>$profile->profile_id</option>";
					}
				?>

			<label>The Title of the product:<input type="text" name="name" /></label><br>
			<label>The Description of the product:<input type="text" name="name" /></label><br>
			<label>The Price of the product:<input type="text" name="name" /></label><br>

			<label class="image_product">Product</label><img id='pic_preview' src='/images/<?=$data->picture ?>' style="max-width:100px;max-height:100px" />

		</div>
		<br><br><br>
		<br><br><br>
		<br><br><br>
		<br><br><br>
		<div>
			<?php $this->view('rating'); ?>
		</div>
		
		<!-- <button> 
				<input type="submit" name="action" class='btn btn-primary' value="Add" />	
		</button>  -->
			<br>


		<button id="add_to_product" type="submit" name='action' value='Add' class="btn btn-primary">Add the new product </button>
</form>

<a href='/Product/index'>Cancel</a>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>