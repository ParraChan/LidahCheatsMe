<?php declare(strict_types=1); 

function saySomething(string $string){
	echo $string;
}

function howOldAreYou(int $year){
	print ((int) date('Y'))-$year;
}

//howOldAreYou(1995);
//saySomething("slap\n");
//saySomething("hey ya");
print date('Y-M-D');
//saySomething(200.00);
 ?>