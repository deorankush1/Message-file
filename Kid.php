<?php
class Kid
{
	private $age;
	private $colour;

	public function __construct()
	{
	 $this -> age = 0;
	 $this -> colour =null;
     }

     public function get_age()
     {
       return $this -> age;
     }
     public function set_age($age)
     {
      $this -> age =$age;
     }


     public function get_colour()
     {
      return $this -> colour;
     }
     public function set_colour($colour)
     {
      $this ->colour = $colour;
     }
}
$kid1 = new Kid();
$kid1 -> set_age(1);
echo $kid1 -> get_age();

$kid1 -> set_colour('fair');
echo $kid1 -> get_colour();

$kid2 = new Kid();
$kid2 -> set_age(2);
echo $kid2 -> get_age();
?> 