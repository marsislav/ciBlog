<form class="container">
	<?= $title; ?>
	<?php echo validation_errors();?>
	<?php echo form_form_open_multipart('categories/create');?>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btnCool">Submit</button>
</form>
</main>
