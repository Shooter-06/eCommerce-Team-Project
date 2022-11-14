<?php $this->view('header', 'Workshop'); ?>

<p>Welcome to our invenotry.</p>

<?php
	$this->view('Product/index');
?>

<?php $this->view('footer'); ?>