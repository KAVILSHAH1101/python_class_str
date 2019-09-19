<?php
$c=$_POST["cid"];
$n=$_POST["cname"];
$t=$_POST["tqty"];

$cn = mysqli_connect("localhost:3306","root","","product");
$in=mysqli_query($cn,"INSERT INTO tblcategory VALUES('$c','$n','$t')");
if($in)
{
	echo "sucess";

}
else
{
	echo "error";
}
?>