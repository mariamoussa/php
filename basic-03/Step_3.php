<?php
    function countword($text,$word){
        $result=explode(" ",$text);
        $nb=0;
        $size=count($result);
        $i=0;
        while($size>0){
            if($word==$result[$i]){
                $nb++;
            }
            $i++;
            $size--;
        }
        return $nb;
    }
    $t="hello world world good world day world";
    $w="world";
    echo "The word ".$w.", is present ".countword($t,$w)." times in the text.";
?>