<?php define('HEADING', 'Ask a Question'); ?>
<?php require_once 'templates/header.php'; ?>
<?php if(!$session->is_logged_in()) { redirect_to("login.php");} ?>
<?php 
	$message = "";
	if(isset($_POST['submit'])) {
		$post = new Post();
		$post->user_id = $_SESSION['user_id'];
		$post->category_id = $_POST['category'];
		$post->post_date = date('Y-m-d H:i:s');
		$post->post_content = $_POST['post'];
		//$post->add_post($content);
		if($post->save()) {
			$message = "Successfully posted question";
		} else {
			$message = join("<br />", $post->errors);
		}
	}


?>

<div class="ui-content">
				<div data-role="fieldcontain">
					<label for="select-choice-1" class="select"></label>
					<form action="post_question.php" method="post" data-ajax="false">
						<select required name="category" id="select-choice-1">
							<option value="">Category</option>
							<option value="1">Computer Science</option>
							<option value="2">History</option>
						</select>
				<textarea name="post" id="textarea-a">Leave a question...</textarea>
				<input type="submit" name="submit" id="submit" value="Post Question" data-mini="true">	
				</form>	
				</div>
			<h3 style="text-align: center">Instant help from your collegues</h3>
		</div>

<?php require_once 'templates/footer.php';?>
		
	
	
