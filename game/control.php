<html>
<head>
	<title>Controller for game</title>
</head>
<body>
  <form method ="POST">
   <input type = "submit" name = "up" value = "up" id = "up">
   <input type = "submit" name = "down" value = "down" id = "down">
   <input type = "submit" name = "left" value = "left" id = "left">
   <input type = "submit" name = "right" value = "right" id = "right">
  </form>
  <script type="text/javascript">

  function buttonPressed(key){
     var request = new XMLHttpRequest();
         request.open("POST", "toggle.php", true);
          var parameters = "position="+key;
         request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         request.send(parameters);
         request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {    
            console.log("it enters");
            console.log(key);
          
               
            }
        };
  }

   var left = document.getElementById("left");
   var right = document.getElementById("right");
   var up = document.getElementById("up");
   var down = document.getElementById("down");
   up.addEventListener("click",function(){
    console.log("clicked");

    buttonPressed("move_up");
   });
   down.addEventListener("click",function(){
    console.log("clicked");
    buttonPressed("move_down");
   });
   right.addEventListener("click",function(){
    console.log("clicked");
    buttonPressed("move_right");
   });
   left.addEventListener("click",function(){
    console.log("clicked");
    buttonPressed("move_left");
   });

 










  </script>
</body>
</html>