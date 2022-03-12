<?php
 session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'book_now');


// if(!$con)
// {

// }
// echo "Success";
//include 'validation.php';
//echo $_SESSION['username'];

$userid=$_POST['userid'];
$source=$_POST['source'];
$where_to=$_POST['where_to'];
$guest=$_POST['guest'];
$start_date=$_POST['start_date'];
$ret_date=$_POST['ret_date'];


$sql="INSERT INTO `book_now`.`book` (`userid`, `source`, `where_to`, `guest`, `start_date`, `ret_date`, `dt`) VALUES ( '$userid', '$source', '$where_to', '$guest', '$start_date', '$ret_date', current_timestamp());";


if($con->query($sql)==true)
{
     header('location:price.php');
}
else 
{
     echo "error: $sql <br> $con->error";
}

?>