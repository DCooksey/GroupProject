<?php 
define('HEADING', 'Ask a Question');
require_once 'templates/header.php';
if(!$session->is_logged_in()) { redirect_to("login.php");}


?>

<div class="ui-content">
				<div data-role="fieldcontain">
					<label for="select-choice-1" class="select"></label>
					<form action="" method="post" data-ajax="false">
						<select required name="category" id="select-choice-1">
							<option>Category</option>
							<option value="1">Computer Science</option>
							<option value="2">History</option>
						</select>
				<textarea name="post" id="textarea-a">Leave a question...</textarea>
				<input type="submit" name="submit" id="submit" value="Post Question" data-mini="true">	
				</form>	
				</div>
				<p></p>
			<h3 style="text-align: center">Instant help from your collegues</h3>
		</div>

<?php require_once 'templates/footer.php';?>
		
	
	
