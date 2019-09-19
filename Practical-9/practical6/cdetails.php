<?php
$p=$_POST["pid"];
$c=$_POST["cid"];
$n=$_POST["cname"];
$s=$_POST["sqty"];
$r=$_POST["rlvl"];

$cn = mysqli_connect("localhost:3306","root","","product");
$in=mysqli_query($cn,"INSERT INTO tblproduct VALUES('$p','$c','$n','$s','$r')");
if($in)
{
	echo "sucessfully added";

}
else
{
	echo "error";
}

?>