class Person
{
	public $name;
	public $age;
	public function getName(){
	return $this-> name;
	}
	public function setName($n)
	{
	$this-> name=$n;
	}
}
$p=new person;
$p->setName("Ankita");
echo $p->getName();

const

public function _ _construct($n,$a){
$this->name=$n;
$this->age=$a;
	
}