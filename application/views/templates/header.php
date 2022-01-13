<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
	<title>CI Blog</title>
</head>
<header>
	<nav>
		<div class="container">
			<ul>
				<li class="logo"><a href="<?php echo base_url() ?>">{ ciBlog; }</a></li>
				<li><a href="<?php echo base_url() ?>">Home</a></li>
				<li><a href="<?php echo base_url() ?>about">About</a></li>
				<li><a href="<?php echo base_url() ?>posts">Blog</a></li>
				<li><a href="<?php echo base_url() ?>categories">Categories</a></li>

				<?php if (!$this->session->userdata('logged_in')) : ?>
				<li><a href="<?php echo base_url() ?>users/login">Login</a></li>
				<li><a href="<?php echo base_url() ?>users/register">Register</a></li>
				<?php endif; ?>
				<?php if ($this->session->userdata('logged_in')) : ?>
				<li><a href="<?php echo base_url() ?>posts/create">Create post</a></li>
				<li><a href="<?php echo base_url() ?>categories/create">Create Category
				<li><a href="<?php echo base_url() ?>users/logout">Log Out</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
</header>
<body>
<!--Flash messages-->
<?php if ($this->session->flashdata('user_registered')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('post_created')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('post_created') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('post_updated')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('post_updated') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('category_created')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('category_created') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('login_failed')): ?>
	<?php echo '<p class="danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
<?php endif; ?>


<?php if ($this->session->flashdata('user_loggedin')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('user_loggedout')): ?>
	<?php echo '<p class="success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
<?php endif; ?>

