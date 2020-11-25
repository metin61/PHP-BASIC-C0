<?php  
    require 'database.php';

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> 
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd > 18 ){
                echo "<h6>Je bent ouder dan 18 jaar je mag de site bekijken.</h6>";
            
            }
        ?>
    </div>

</body>
</html>