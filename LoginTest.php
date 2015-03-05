<?php
// establishing the MySQLi connection
 
$con = mysqli_connect(“localhost”,”root”,”Ned”,”Test2”);
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
}
// checking the user
if(isset($_POST[‘submit’])){
$email = mysqli_real_escape_string($con,$_POST[‘email’]);
$pass = mysqli_real_escape_string($con,$_POST[‘password’]);
$sel_Test2 = "select * from Test2 where Test2_username='$email' AND Test2_password='$pass'";
$run_Test2 = mysqli_query($con, $sel_Test2);
$check_Test2 = mysqli_num_rows($run_Test2);
if($check_Test2>0){
$_SESSION[‘Test2_username’]=$email;
echo “<script>window.open(‘home.php’,’_self’)</script>”;
}
else {
echo “<script>alert(‘Email or password is not correct, try again!’)</script>”;
}
}
?>