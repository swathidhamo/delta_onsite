<html>
<head>
	<title>Auction forum</title>

	<?php

	?>
</head>
<body>
<form method = "POST">
  Bid: <input type = "number" name = "bid" id = "bid" >

  <div id = "content"></div>


</form>
<script type="text/javascript">
var new_user=false;
   
      function bid_price(){
          var requests = new XMLHttpRequest();
         document.getElementById("content").innerHTML = " work now ";
         requests.open('GET', 'result.json', true);
         requests.send();
         requests.onload = function () {

         console.log("yessssss");
         var data = JSON.parse(this.responseText);
         console.log(data.length);
         document.getElementById("content").innerHTML = "<p>Highest bid is $ "+data[0]+"by the user "+data[1]+"</p>";
         document.getElementById("bid").setAttribute("min",data[0]);
         
       
           }
      }

   

   function changeBid(){

    	 var bid_value  = document.getElementById("bid").value;     
        var xmlhttp = new XMLHttpRequest();
         xmlhttp.open("POST", "display.php", true);
         if(!new_user){
         var parameter ="bid="+bid_value;
     }
         else{
         	var parameter ="bid=0";
         	new_user = false
         }
         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xmlhttp.send(parameter);
         xmlhttp.onreadystatechange = function() {
          
          
            if (this.readyState == 4 && this.status == 200) {    
            console.log("it enters");
            bid_price();
            
            }
        };
    }


     
   
  var bid = document.getElementById("bid");
  bid.addEventListener("change",changeBid);
  window.onload = function(){
  	new_user= true;
  	changeBid();
    //time_count();


  }

  






</script>
</body>
</html>