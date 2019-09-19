<?php
class car
{
	public $tank;
	public function fill($t)
	{
		$this->tank+=$t;
		return $this;
	}
	public function ride($t)
	{
		$avg=$t/10;
		$this->tank-=$avg;
		return $this;
	}
}
$n=new car();
$tank=$n->fill(40)->ride(50)->tank;
echo "Remaning flue of tank is".$tank;
?>