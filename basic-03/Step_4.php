<?php
    function sum($num){
        $n=0;
        for($i=0;$i<strlen($num);$i++){
            $n++;
        }
        return $n;
    }
    echo sum(12928283);
?>