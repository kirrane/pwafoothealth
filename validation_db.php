<?php

session_start();


$con=mysqli_connect('localhost:3306','footheal_cg','database12345');
mysqli_select_db($con, 'footheal_foothealthcg');

$name = $_POST['username'];
$pass = $_POST['password'];

$s= "select * from usertable where username = '$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']= $name;
	header('location:index_login.html');
}else{
	header('location:login_db.php');
}

?>