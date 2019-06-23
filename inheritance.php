<?php
class Person{
	public $name;
	public function getName(){
	echo $this->name;
	}
}	
//public function setName($n)
	//{
	//$this-> name=$n;
	//}
	class Balance extends Person
	{
		public $bal;
		public function __construct($name,$bal){
			$this->name=$name;
			$this->bal=$bal;
		}
		public  function getBal(){
			echo $this->bal;

		}

		}
	$b = new Balance('Ankita',500);
	$b->getname();
	$b->getBal();
	?>

