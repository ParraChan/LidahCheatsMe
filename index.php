<?php declare(strict_types=1); 

function saySomething(string $string): string{
	return 'first ' . $string;
}

function howOldAreYou(int $year): int{
	return ((int) date('Y'))-$year;
}
echo saySomething("slap\n");
echo howOldAreYou(1995);
print "\n";

function discount(float $price, float &$discount): void{
	$discount = $price * 0.2;
}

$price = 1000;
$discount = 0;

discount($price,$discount);
print sprintf('Precio inicial: %s',$price);
print "\n";
print sprintf('Descuento: %s',$discount);
print "\n";
print sprintf('Precio final: %s',$price-$discount);

//saySomething("hey ya");
//print date('Y-M-D');
//saySomething(200.00);
 ?>