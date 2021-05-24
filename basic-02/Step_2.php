<?php
function greaterFn($num){
    if($num>30){
        return "$num is greater than 30";
    }else if($num>20){
        return "$num is greater than 20";
    }else{
        return "$num is greater than 10";
    }
}

$result = greaterFn(35);
echo $result;
?>