<?php declare(strict_types=1); 

class Product
{

	private $name;
	private $price;

	public function getName():string{
		return $this->name;
	}

	public function setPrice(float $price):void{
		$this->price=$price;
	}
	public function getPrice():float{
		return $this->price;
	}
	public function getDiscount():float{
		return $this->calculateDiscount();
	}

	private function calculateDiscount():float{
	$discount=0.2;
	return (1-$discount)*$this->price;	
	}

	public function __construct(string $name, float $price)
	{
		$this->name=$name;
		$this->price=$price;
	}
}
	
$obj = new Product('Guitarra electrica',1500);
//$obj->name = 'Amplificador';
var_dump($obj->getName());
$obj->setPrice(1900);
var_dump($obj->getPrice());
var_dump($obj->getDiscount());
