<?php
@include('header.php');

?>
    <body onload="startGame()">

    <div class="container">
        <button class="btn btn-info" onclick="moveup()">UP</button><br><br>
        <button class="btn btn-info" onclick="moveleft()">LEFT</button>
        <button class="btn btn-info" onclick="moveright()">RIGHT</button><br><br>
        <button class="btn btn-info" onclick="movedown()">DOWN</button>
    </div>


    <img src="media/sm.jpg" id="mario" alt="">



<?php
@include('footer.php');

?>