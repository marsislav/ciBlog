<main class="container">
	<h2><?=$title;?></h2>
	<?php echo validation_errors();?>
	<?php echo form_open('posts/update');?>
	<input type="hidden" name="id" value="echo $post['id'];?>">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title'];?>">

	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" cols="30" rows="10" placeholder="Add Body content">
			<?php echo $post['body'];?>
		</textarea>

	</div>
	<button type="Submit" class="btn btnCool">Submit</button>

	</form>
</main>
