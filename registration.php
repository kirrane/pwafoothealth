<?php

session_start();
header('location:login_db.php');

$con=mysqli_connect('localhost:3306','footheal_cg','database12345');
mysqli_select_db($con, 'footheal_foothealthcg');

$name = $_POST['username'];
$pass = $_POST['password'];

$s= "select * from usertable where username = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo" Username Already Taken";
}else{
	$reg= " insert into usertable(username,password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>