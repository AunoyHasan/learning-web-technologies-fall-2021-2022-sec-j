<?php

	//$array = [$id=>41110, 'name'=>'Aunoy', 'cgpa'=>3.5, 'semester'='8th'];
	$array = [41110, 'Aunoy', 3.5, 'fall'];
	$findElement="Hasan";
	$flag=0;
	
	echo "Array elements are : ";
	print_r($array);
	
	for($i=0; $i<4; $i++)
	{
		if($array[$i]==$findElement)
		{
			$flag++;
		}
	}
	if($flag != 0)
	{
		echo "<br>".$findElement." is found in the array";
	}
	else
	{
		echo "<br>".$findElement." is not found in the array";
	}	
	
	
?>