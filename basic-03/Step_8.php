<?php
    function reverseword($word){
        $s=" ";
        for($i=strlen($word);$i>=0;$i--){
            $s.=$word[$i];
        }
        return $s;
    }
    
    echo reverseword("maria");
?>