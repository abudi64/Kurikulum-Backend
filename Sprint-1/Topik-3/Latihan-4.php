<?php  
for ($i=0; $i <= 8; $i++) { 
	for ($j=0; $j <= 8; $j++) { 
		if ($i+$j>=8) {
			echo " *";
		}else {
			echo " -";
		}
	}
	echo "\n";
}

?>