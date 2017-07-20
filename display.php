<html>
<head>
  <title></title>
  <?php
  
    require("connect.php");
     
    if(!empty($_POST["bid"])){
      $bid = $_POST["bid"];
    }
      $username = $_SESSION["username"];
      $item = "book";
      $value = 100;

      
         $query = "SELECT value,username FROM bid";
         $sql = mysqli_query($link,$query);
         $rows = mysqli_num_rows($sql);
         if($rows==0){
          $time = time();
          $time_limit = strtotime("+2minutes");
          $sql_create = "INSERT INTO bid (username,value,item,time,time_limit) VALUES 
          ('$username','$value','$item','$time','$time_limit')";
          $query_create = mysqli_query($link,$sql_create);

         }
         else if($rows>0){
         while($result = mysqli_fetch_assoc($sql)){
          $emparray = array();
          
             if($bid>$result["value"]){
                            $val = $result["value"];
              $query_add = "UPDATE bid SET username = '$username', item = '$item', value = '$bid' WHERE value = '$val'" ;
              $result_add = mysqli_query($link,$query_add);
              $emparray[] = $bid;
              $emparray[] = $username;

             }
             else{
              $emparray[] = $result["value"];
              $emparray[] = $result["username"];
             }

                 $ther = json_encode($emparray);
                file_put_contents("result.json",$ther);
           }
        }
  



      
     
      
    
 ?>

</head>
<body>
</body>
</html>