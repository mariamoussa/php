<?php
function calculateArea($height, $width){
    if($height==5 && $width==5){
        echo"Area is 25";
    }else{
        echo "Area is: ".$height*$width;
    }
}

calculateArea(5,3);
?>