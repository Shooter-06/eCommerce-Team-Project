<?php $this->view('header', 'TeamProject'); ?>

<h1>New product Inputs</h1>
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

		</div>
		<div>
			<?php $this->view('rating'); ?>
		</div>
		
	<input type="submit" name="action" value="product_post" class='btn btn-primary' />
</form>

<a href='Product/index'>Cancel</a>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>
<?php $this->view('footer'); ?>