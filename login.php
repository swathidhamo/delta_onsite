<html>
<head>

	<title>Project-Auction</title>

	<?php

     session_start();
     session_destroy();
     //session_start();
     require("connect.php");

     if(!$link){
      echo "Could not connect";
      echo mysqli_error($link);
     }
     else{
      echo "Sucesssfully connected";

      if(isset($_POST["login"])){

      	if(isset($_POST["username"])){

      	  	$username = mysqli_real_escape_string($link,$_POST["username"]);
            $username = stripslashes($username);
            $_SESSION["username"] = $username;
            header("Location: count.php ");
      	 }



     }

  }







	?>


</head>
<style type="text/css">
   .login{
     border: 2px solid black;
     border-radius: 6px 6px 6px 6px;
     padding: 15px 15px 15px 15px;
     margin right: 250px;
     margin-top: 150px;
     margin-left: 50px;
     width: 300px;
     font-size: 15px;
   }

   body {
    font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
    color: #404040; 
    background: url("http://draxtargames.com/dgwp/wp-content/uploads/2015/11/Auction-gavel.jpg");
   


   }
   .jumbotron{
   background-color: #bc2210;

   }
   input{
   	margin: 20px 20px 20px 20px;
   }
   
  </style>
<body>
  <div class = "login">
  <form method = "POST" >
    <p>Username: <input type = "text" name = "username" placeholder = 'Enter the username'></p>

    <input type = "submit" name = "login" value = "Login">

  </form>

</div>


</body>
</html>