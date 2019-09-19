<?php
session_start();
$cn=mysqli_connect("localhost:3306","root","","db");
$u=$_post["uname"];
$p=$_post["pass"];
if(isset($_post["submit"]))
{
	$q="SELECT * from usertable where username="$u" and password="$p"";
	else if(mysqli_query($q,$cn))
	{
		$u=$_SESSION['logged in'];
		header("location:index.php")
	}
	else
	{
		header("location:login.php");
	}
}
	
?>
