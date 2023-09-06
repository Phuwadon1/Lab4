<?php
    $A = $_GET["a"];
    $B = $_GET["b"];
    
?>
<html>
    <body>
        <?php 
        $x = 1;
        echo "ต้องการพิมพ์=$A<br>";
        echo "จำนวนครั้ง=$B<br>";

        while($x <= $B) {
            echo "$A <br>";
            $x++;
          }
        ?>
        
    </body>
</html>