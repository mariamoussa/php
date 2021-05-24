<?php 
$var1=32;
$var2=45;
echo "Before swap: <br>";
echo "var 1: ".$var1."<br>";
echo "var 2: ".$var2."<br>";
$tmp=$var1;
$var1=$var2;
$var2=$tmp;
echo "After swap: <br>";
echo "var 1: ".$var1."<br>";
echo "var 2: ".$var2."<br>";


?>