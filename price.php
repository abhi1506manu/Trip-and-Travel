<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Price</title>
     <style>
          .price{
               width: 80%;
               background-color:rgb(150, 240, 60);
               padding:30px;
               margin-left: 80px;
               margin-top: 50px;
               color:#ffff;
          }
          button{
               padding:7px;
               width: 100px;
               border:1px solid blue;
               background-color:rgb(30, 98, 235);
               border-radius: 5px;
          }

          button:hover{
               background-color:blue;
          }
          a{
               text-decoration: none;
               color: white;
              
          }
     </style>
</head>
<body>
     <?php
          session_start();
     ?>
     <div class="price">
          <h1>You have booked successfully.</h1>
          <h2>From: <?php echo $_SESSION['start'];  ?></h2>
          <h2>To: <?php echo $_SESSION['end'];  ?></h2>
          <h2>Total Price= <?php echo $_SESSION['numb'] * $_SESSION['amount'];  ?> </h2>
          <!-- <h2>Total Price= <?php echo  $_SESSION['amount'];  ?> </h2> -->
          <a href="http://localhost/mini/index.php"><button type="submit"> Go Back</button></a>
     </div>
</body>
</html>