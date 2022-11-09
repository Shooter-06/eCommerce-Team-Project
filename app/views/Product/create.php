<?php $this->view('header', 'Workshop'); ?>

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
		<div class="rating">
			
		<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
  	<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
  	<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
  	<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
  	<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>

		</div>
		
	<input type="submit" name="action" value="Publish" class='btn btn-primary' />
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