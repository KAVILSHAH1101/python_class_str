<?php
$cn=mysqli_connect("localhost:3306","root","","product");
$s=mysqli_query($cn,"SELECT Name FROM tblproduct");
//$r=mysqli_query($cn,$s);
echo $s;
?>