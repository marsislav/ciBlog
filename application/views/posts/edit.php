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
		<textarea id="editor1" name="body" cols="30" rows="30" placeholder="Add Body content">
			<?php echo $post['body'];?>
		</textarea>

	</div>
	<div class="form-group">
		<label for="category_id"></label>
		<select name="category_id" >
			<?php foreach($categories as $category) : ?>
				<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
			<?php endforeach;?>
		</select>
	</div>
	<button type="Submit" class="btn btnCool">Submit</button>

	</form>
</main>
