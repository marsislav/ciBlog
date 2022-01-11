<main class="container">
<h2><?= $title ?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">

	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" cols="30" rows="10" placeholder="Add Body content"></textarea>

	</div>
	<button type="Submit">Submit</button>

</form>
</main>
<?php

