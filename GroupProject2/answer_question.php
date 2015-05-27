<?php define('HEADING', 'Help Friends'); ?>
<?php include 'templates/header.php'; ?>
<?php if(!$session->is_logged_in()) { redirect_to("login.php");} ?>
<?php	
	// Find all the posts
	$posts = Post::find_all();

 ?>

		<div class="ui-content">
			<?php foreach($posts as $post): ?>
			<p><?php echo $post->post_content ?></p>
			<hr />
			<?php endforeach; ?>
		</div>
		
<?php include 'templates/footer.php'; ?>
	