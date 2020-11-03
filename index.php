<?php declare(strict_types=1); 

class priceHelper
{
	const DISCOUNT = 0.2;
	const IVA = 0.18;
	
	public static function getDiscount2(float $price):float{
		return $price * self::DISCOUNT;
	}
	public static function getIva2(float $price):float{
		return $price * self::IVA;
	}

	public static function getDiscount(float $price):float{
		return $price * 0.2;
	}

	public static function getIva(float $price):float{
		return $price * 0.18;
	}
}

echo priceHelper::getDiscount(200);
print "\n";
echo priceHelper::getIva(200);
print "\n";
echo priceHelper::getDiscount2(200);
print "\n";
echo priceHelper::getIva2(200);