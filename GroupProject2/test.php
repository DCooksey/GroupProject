<?php require_once 'templates/header.php'; ?>

<?php 

// $user = new User();
// $user->email = "mma202kd@gold.ac.uk";
// $user->username = "Kazi222";
// $user->password = "test";
// $user->first_name = "Kazi";
// $user->last_name = "Didar";
// $user->save(); 

$post = new Post();
$content = "Hello";
$post->add_post($content);


?>


<?php require_once 'templates/footer.php'; ?>

<!-- End of Home Page -->


 
