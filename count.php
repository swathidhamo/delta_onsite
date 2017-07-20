<html>
<head>
	<?php
     //session_start();
     require("time.php");


	  ?>
	<title>Timer</title>
</head>
<body>
	<div id = "content"></div>
  <script type="text/javascript">
   function change_time(){

        var time_request = new XMLHttpRequest();
         time_request.open("POST", "time.php", true);
          var parameters = "time="+"start";
         time_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         time_request.send(parameters);
         time_request.onreadystatechange = function() {
          
          
            if (this.readyState == 4 && this.status == 200) {    
            console.log("it enters");
          
               
            }
        };
        
         var request_time = new XMLHttpRequest();
         //document.getElementById("content").innerHTML = " work now ";
         request_time.open('GET', 'time.json', true);
         request_time.send();
         request_time.onload = function () {

         console.log("yessssss");
         var data = JSON.parse(this.responseText);
         console.log(data);

         
         	document.getElementById("content").innerHTML = "<p>"+data+"</p>";
        
          //change_time();

          }
   
   }

 
  window.onload = function(){
   change_time();
   setInterval(change_time,1000);

  }


  </script>
</body>
</html>