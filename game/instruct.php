<html>
<head>
  <title></title>
  <?php
  
    require("connect_game.php");
     
    if(!empty($_POST["bid"])){
      $bid = $_POST["bid"];
    }
      
      
         $query = "SELECT * FROM controls";
         $sql = mysqli_query($link,$query);
         $emparray = array();

         while($result = mysqli_fetch_assoc($sql)){
              $emparray[] = $result;
          

              }
    
                 $ther = json_encode($emparray);
                file_put_contents("instruct.json",$ther);
           
        
      
  



      
     
      
    
 ?>

</head>
<body>
</body>
</html>