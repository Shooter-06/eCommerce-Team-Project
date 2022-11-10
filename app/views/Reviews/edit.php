<?php $this->view('header', 'Workshop'); ?>

<h1>Edit Review</h1>
<form action='' method='post' enctype='multipart/form-data'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Picture:</label><img id='pic_preview' src='/images/<?=$data->picture ?>' style="max-width:200px;max-height:200px" />
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Review:<textarea placeholder='Say something about your product.' name="caption"><?= htmlspecialchars($data->caption) ?></textarea></label>
	</div>
	<input type="submit" name="action" value="Publish" class='btn btn-success' />
</form>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>
<?php $this->view('footer'); ?>