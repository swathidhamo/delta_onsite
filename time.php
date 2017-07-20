<html>
<head>
  <title></title>
  <?php
  
    require("connect.php");
     
         $emparray = array();
         $item = 'book';
         $query = "SELECT time_limit,username,value FROM bid WHERE item = '$item'";
         $sql = mysqli_query($link,$query);
         $rows = mysqli_fetch_array($sql);
         $time = time();
         if($rows["time_limit"]>$time){
          $emparray[0] = gmdate(("i:s"),time());
          $emparray[1] = time();
          $query_insert = "UPDATE bid time = '$time' WHERE item = '$item'";
          $sql_insert = mysqli_query($link,$query_insert);

         }
         else if($rows["time_limit"]<=$time){
          $emparray[0] = "Bid time over winner is";
          $emparray[1] = $rows["username"]." for Rs ".$rows["value"];

         }
         
         
         
           $ther = json_encode($emparray);
           file_put_contents("time.json",$ther);



  



      
     
      
    
 ?>

</head>
<body>
</body>
</html>