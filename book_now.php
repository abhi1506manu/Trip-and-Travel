
<?php
 session_start();
 $conn = mysqli_connect('localhost','root','');
 mysqli_select_db($conn,'book_now');

 
if(!$conn){
     die('Could not Connect MySql Server:' .mysql_error());
   }
   

$nameerr=$fromerr=$whererr=$guesterr="";
$name=$from=$where_to=$guestno="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

         //Email Validation   
    if (empty($_POST["userid"])) {  
     exit("username is required");  
} else {  
     $name = test_input($_POST["userid"]);  
     // check that the e-mail address is well-formed  
     if (!filter_var($name, FILTER_VALIDATE_EMAIL)) {  
         exit("Invalid username format");  
     }  
} 

     if (empty($_POST["source"])) {
           exit("Source name is required");
     } else {
           $from = test_input($_POST["source"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$from)) {  
               exit("Only alphabets and white space are allowed");
     }
    }
        
      if (empty($_POST["where_to"])) {
     exit("Where to is required");
     } else {
           $where_to = test_input($_POST["where_to"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$where_to)) {  
          exit("Only alphabets and white space are allowed");
     }
    }

     
     if (empty($_POST["guest"])) {  
          exit("guest no is required");  
  } else {  
          $guestno = test_input($_POST["guest"]);  
          // check if mobile no is well-formed  
          if (!preg_match ("/^[0-9]*$/", $guestno) ) {  
          exit("Only numeric value is allowed.") ; 
          }  
     }

     if($from == $where_to)
     {
          exit("Erro");
     }
}
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

   $start_date=$_POST['start_date'];
$ret_date=$_POST['ret_date'];

// $sql="INSERT INTO `book_now`.`book` (`userid`, `source`, `where_to`, `guest`, `start_date`, `ret_date`, `dt`) VALUES ( '$userid', '$source', '$where_to', '$guest', '$start_date', '$ret_date', current_timestamp());";

//    if(isset($_POST['submit'])) {  
     if($nameerr == "" && $fromerr == "" && $whererr == "" && $guesterr == "") {  
         
          if(mysqli_query($conn, "INSERT INTO book_now.book(userid, source, where_to ,guest,start_date,ret_date) VALUES('" . $name . "', '" . $from . "', '" . $where_to . "', '" .$guestno. "','" .$start_date. "','" .$ret_date. "')"))
          {
               if($from=='Guwahati' && $where_to=='Kolkata')
               {
                    $price=500;
               }

               $_SESSION['start']=$from;
               $_SESSION['end'] = $where_to;
               $_SESSION['amount']=$price;
               $_SESSION['numb']=$guestno;
               
               header("location: price.php");
               exit();
               } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
               }
               }
               mysqli_close($conn);




     //     echo "<h3 color = #FF0001> <b>You have sucessfully registered.";
     //     echo "<h2>Your Input:</h2>";  
     //     echo "userame: " .$name;  
     //     echo "<br>";  
     //     echo "from: " .$from;  
     //     echo "<br>";  
     //     echo "where: " .$where_to;  
     //     echo "<br>";  
     //     echo "guestno: " .$guestno;  
     //     echo "<br>";
//      } else {  
//          echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
//      } 
//     } 
     

?>