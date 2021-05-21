<?php 
$course_name="Database";
$enrolled_students=10;
$price=25.50;
$on_discount=true;
echo"Course Title: ".$course_name."<br> Enrolled Students:" .$enrolled_students."<br> Course price: ".$price." $ USD <br> Course on discount: ";
if($on_discount==true){
    echo"Yes";
}else{
    echo"No";
}
?>