<main class="container">
<h2><?= $title ?></h2>
<?php echo validation_errors();?>
<?php echo form_open_multipart('posts/create'); ?>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">

	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea id="editor1" name="body" cols="30" rows="30" placeholder="Add Body content"></textarea>

	</div>
	<div class="form-group">
		<label for="category_id"></label>
		<select name="category_id" >
			<?php foreach($categories as $category) : ?>
				<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
			<?php endforeach;?>
		</select>
	</div>
	<div class="form-group">
		<label for="userfile">Upload Image</label>
		<input type="file" name="userfile" size="20">
	</div>
	<button type="Submit">Submit</button>

</form>
</main>
<?php

