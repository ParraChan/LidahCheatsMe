<?php declare(strict_types=1); 

class product
{

	public $name;
	public $price;

	protected function calculateDiscount(float $discount):float
	{
		return $this->price*$discount;
	}
}

class book extends product
{
	
	public $releaseDate;

	public function getDiscount()
	{
		return $this->calculateDiscount(0.2);
	}

	public function __construct(string $name, float $price, string $releaseDate)
	{
		$this->name=$name;
		$this->price=$price;
		$this->releaseDate=$releaseDate;
	}

}

class guitar extends product
{
	
	public $type;

	public function getDiscount()
	{
		return $this->calculateDiscount(0.05);
	}

	public function __construct(string $name, float $price, string $type)
	{
		$this->name=$name;
		$this->price=$price;
		$this->type=$type;
	}

}

$obj = new Book('Principito',150,'30 de febrero');
var_dump($obj);
print "\n";
var_dump($obj->getDiscount());
print "\n";
$obj1 = new guitar('Hamachi',8300,'Electrico');
var_dump($obj1);
print "\n";
var_dump($obj1->getDiscount());