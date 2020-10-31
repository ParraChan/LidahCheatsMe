<?php declare(strict_types=1); 

class mobileDevice
{	

	public function __construct(string $brand, string $model, string $color){
		$this->brand=$brand;
		$this->model=$model;
		$this->color=$color;

	}

	public $brand;
	public $model;
	public $color;

	public function turnOn():string 
	{
		return "$this->brand ha sido encendido";
	}

	public function makeACall(string $phoneNumber):string
	{
		return "$this->brand esta llamando al numero: $phoneNumber";
	}
}

	$obj1 = new mobileDevice('Iphone','X','White');
	$obj2 = new mobileDevice('Iphone','XII','White');
	var_dump($obj1);
	var_dump($obj2);
	
