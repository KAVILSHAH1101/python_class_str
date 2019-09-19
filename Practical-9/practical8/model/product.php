<?php
class Product_Model
{
	public $connect;
	public function __construct()
	{
		$this->connect=mysqli_connect("localhost","root","","ecomm");
	}
	function getallproduct()
	{
		$result=mysqli_query($this->connect,"SELECT * FROM `product`");
		return $result;
	}
}
