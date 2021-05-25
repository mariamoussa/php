<?php
    $x = 1;
    while ($x <= 8) {
        for ($y = 1; $y <= $x; $y++) {
            echo "*";
            if ($y < $x) {
                echo " ";
            }
        }
        echo "<br/>";
        $x = $x + 1;
    }
?>