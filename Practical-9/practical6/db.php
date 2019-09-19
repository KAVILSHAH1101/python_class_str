<?php
$cn=mysqli_connect("localhost","root","","mydb");
$un=$_POST["uname"];
$pa=$_POST["pass"];
$mo=$_POST["mono"];
$em=$_POST["email"];
$gen=$_POST["m"];
$c=$_POST["cname"];
$o=$_POST["occu"];
$db=$_POST["dob"];
$sq=$_POST["seq"];
$sa=$_POST["sean"];
if(mysqli_connect_error())
{
	echo "error";
}
$q=("INSERT INTO Usertbl VALUES('$un','$pa','$mo','$em','$gen','$c','$o','$db','$sq','$sa')");
$r=mysqli_query($cn,$q);
if($r)
{
	echo"Data Inserted!!";
}
else
{
	echo"Error";
}
mysqli_close($cn);
echo "done";
?>
