<?php  

	echo "Masukkan nilai (celcius):";

	$celcius = (int) fgets(STDIN);

	$fahrenheit = ($celcius * 9/5) + 32;

	$kelvin = $celcius + 273.15;

	$reamur = $celcius * 4/5;

	echo " = $fahrenheit ºF " . "\n";

	echo " = $kelvin ºK " . "\n";

	echo " = $reamur ºR " . "\n";

?>