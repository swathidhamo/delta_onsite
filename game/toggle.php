<html>
<head>
	<title></title>
	<?php
     require("connect_game.php");

      if(!empty($_POST["position"])){
      $position = $_POST["position"];
       

    }
        $default_value = 0;
        $default_query = "UPDATE controls SET move_up = '$default_value', move_down = '$default_value',
         move_right='$default_value', move_left='$default_value'";
         $sql_default = mysqli_query($link,$default_query);
         if($sql_default){
         	echo "yes";
         }
         else{
         	echo mysqli_error($link);
         }
    //$position = "move_up";

         $value = 1;
         $query = "UPDATE controls SET $position = '$value'";
         $sql = mysqli_query($link,$query);
	?>
</head>
<body>

</body>
</html>