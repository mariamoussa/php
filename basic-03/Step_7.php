<?php
    for ($i = 0; $i < 7; $i++) {
        for ($j = 7; $j >=0; $j--) {
            if ((($i == 0 or $i == 6) and $j >= 0 and $j <= 6) or $i + $j == 6)
                echo "*";
            else
                echo "&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
?>