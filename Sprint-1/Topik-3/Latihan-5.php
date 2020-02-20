<?php  
for ($i=0; $i <= 8; $i++) { 
	for ($j=0; $j <= 8; $j++) { 
		if ($j+$i<=8 && $i*1>=$j || $i*1<=$j && $j+$i>=8) {
			echo " -";
		}else {
			echo " *";
		}
	}
	echo "\n";
}

?>