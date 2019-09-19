<?php
$cn = mysqli_connect("localhost:3306","root","","product");
if($cn)
{
	echo "sucess";
}
else
{
	echo "fail";
}
?> 