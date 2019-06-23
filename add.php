<?php
class sum{
	public $a;
	public $b;
	public $c;
	public function __construct($h,$j)
	{
	  $this-> a=$h;
	  $this-> b=$j;

	}
	public function sum(){
		return $this->c=$this->a+$this->b;
		
	}
} 
	$r = new sum(4,5);
	echo $r->sum();


?>