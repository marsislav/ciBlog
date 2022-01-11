<main class="container">
<h2>
	<?php echo $post['title'];?>
</h2>
<small>Posted on: <?php echo $post['created_at']; ?></small>
<?php echo $post['body'];?>
	<a href="edit/<?php echo $post['slug'];?>" class="btn btnCool">Edit</a>
	<?php echo form_open('/posts/delete/'.$post['id']);?>
	<input type="submit" value="Delete" class="btn btnDanger">
	</form>

</main>
