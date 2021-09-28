<?php

    $number1 = 15;
    $number2 = 35;
    $number3 = 115;
	
	echo "Number1 is : ".$number1;
	echo "<br>Number2 is : ";
	print($number2);
	echo "<br>Number3 is : ";
	print_r($number3);
	
	
	if(($number1>$number2) && ($number1>$number3))
	{
		echo "<br>".$number1."<b> is the height number</b>";
	}
	elseif($number2>$number1 && $number2>$number3)
	{
		echo "<br>".$number2."<b> is the height number</b>";
	}
	else{
		echo "<br>".$number3."<b> is the height number</b>";
	}
?>