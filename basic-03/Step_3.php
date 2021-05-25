<?php
    function countword($text,$word){
        $result=explode(" ",$text);
        $nb=0;
        for($i=0; $i<count($result); $i++){
            if($word==$result[$i]){
                $nb++;
            }
        }
        return $nb;
    }
    $t="hello world world good world day world";
    $w="world";
    echo countword($t,$w);
?>