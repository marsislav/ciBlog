<main class="container">
<h2><?= $title ?></h2>
<?php foreach ($posts as $post): ?>
<h3><?php echo $post['title'];?></h3>
<div class="row">
	<div class="col-md-3"><img src="<?php echo site_url();?>/assets/img/posts/<?php echo $post['post_image']; ?>" alt="Post Image"></div>
	<div class="col-md-9">
		<small>
			Posted on:<?php echo $post['created_at'];?> in <?php echo $post['name']; ?>
		</small>
		<?php echo word_limiter($post['body'], 40);?>
		<p><a href="<?php echo site_url('/posts/'.$post['slug']);?>" class="btn btnCool">Read More</a></p>

	</div>

</div>

<?php endforeach; ?>

</main>
