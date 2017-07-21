<html>
   <head>
    <title>DUNGEON-CRAWLER GAME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>

       <div id = "instruction">
        <div id = "heading">DUNGEON CRAWLER GAME</div>
         <ul>
           <li>Press the space bar to start the game</li>
           <li>You have 45 seconds to reach the first extit point</li>
           <li>You have 3 floors and each floor has a time duration within which you have to complete the maze</li>
           <li>If you get killed by enemies you restart the game</li>
           <li>Don't forget to collect the treasures on your way</li>
           <li>Good luck !!</li>

         </ul>
       
      </div>
       <canvas id = "canvas" height = "400" width = "400"></canvas>
       <div id = "time"></div>
       <button id = "mute">Mute</button>

       <script src = "game.js" ></script>
       
   

    </body>
</html>