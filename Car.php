<?php
class Car
{
	    private $model;
	    private $colour;
	    private $price;
	    private $sheet;
	    private $brand;

	public function __construct()
	{
		$this -> model ='';
		$this -> colour ='';
		$this -> price =0;
		$this -> sheet =0;
		$this -> brand ='';
	}
	public function get_model()
	{
		return $this -> model;
	}
	public function set_model($model)
	{
		$this -> model =$model;
	}
	

	public function get_colour()
	{
		return $this -> colour;
	}
	public function set_colour($colour)
	{
		$this -> colour = $colour;
	}


	public function get_price()
	{
		return $this -> price;
	}
	public function set_price($price)
	{
		$this -> price =$price;
	}


	public function get_sheet()
	{
		return $this -> sheet;
	}
	public function set_sheet($sheet)
	{
		$this -> sheet = $sheet;
	}


	public function get_brand()
	{
		return $this -> brand;
	}
	public function set_brand($brand)
	{
		$this -> brand = $brand;
	}
}
$BMWM1 = new Car();
$BMWM1 -> set_model(m1);
echo $BMWM1 -> get_model();

$BMWM1 -> set_colour('marron');
echo $BMWM1 -> get_colour();

$BMWM1 -> set_price(6000000);
echo $BMWM1 -> get_price();


$BMWM1 -> set_brand('BMW');
echo $BMWM1 -> get_brand();

$BMWM1 -> set_sheet(6);
echo $BMWM1 -> get_sheet();

?>
