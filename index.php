<?php declare(strict_types=1); 

class mobileDevice
{	
	public $brand;
	public $model;
	public $color;

	public function turnOn()
	{
		echo "$this->brand ha sido encendido";
	}

	public function makeACall(string $phoneNumber)
	{
		echo "$this->brand esta llamando al numero: $phoneNumber";
	}
}
	$obj = new mobileDevice();
	$obj->brand ='Iphone';
	$obj->model ='8+';
	$obj->color = 'White';

	var_dump($obj);
	$obj->turnOn();
	print "\n";
	$obj->makeACall('2345');