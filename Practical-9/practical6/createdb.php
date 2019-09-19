<?php
$cn=mysqli_connect("8081");
$sql_q="CREATE DATABASE PRODUCT";
if(mysqli_query($cn,$sql_q))
{
	echo "Databse created";
}
else
{
	echo "Error".mysqli_error($cn);
}
?>
