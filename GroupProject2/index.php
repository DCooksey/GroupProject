<?php require_once 'templates/header.php'; ?>

<!-- Main Content -->
<div class="ui-content">
	<h2 style="text-align: center">Learn about Goldsmiths the quick and easy way!</h2>
	<a href="post_question.php" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-corner-all">Ask a question</a>
	<a href="answer_question.php" class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-corner-all">Help your friends!</a>
	<p style="text-align: center"><?php if($session->is_logged_in()) { echo "Hi " . $_SESSION['first_name'];} ?></p>
</div>
<!-- End Main Content -->

<?php require_once 'templates/footer.php'; ?>

<!-- End of Home Page -->
