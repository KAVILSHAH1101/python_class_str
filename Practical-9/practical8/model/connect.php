<?php
class Connection
{
	
	function connect()
	{
		 return mysqli_connect("localhost","root","","ecomm") or die("Not connected");
	}

}
	

?>