<?php
require_once '/../model/product.php';
class Product_Controller
{
	
	public $products;
	public function __construct()
	{
		$this->products=new Product_Model();
	}
	function showallproduct()
	{
		
		$allproduct=$this->products->getallproduct();
		while($oneproduct=mysqli_fetch_assoc($allproduct))
		{
			include '/../view/product.php';
			
		}

	}
	

}


?>