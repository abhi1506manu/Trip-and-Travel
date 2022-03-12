<?php
session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
$name=$_POST['email'];
$pass=$_POST['password'];

$s = "select * from usertable where email='$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
     echo "username already taken";
}
else{
     $reg = "insert into usertable(email,password) values('$name','$pass')";
     mysqli_query($con,$reg);
     echo "registration successful";
}

?>