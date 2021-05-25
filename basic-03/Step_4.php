<?php
    function sum($num){
        $s=0;
        for($i=0;$i<strlen($num);$i++){
            $s+=$num[$i];
        }
        return $s;
    }
    echo sum("123");
    echo "<br>";
    echo sum("9999");
?>