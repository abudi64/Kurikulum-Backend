<?php  
for ($i=0; $i <= 8; $i++) { 
	for ($j=0; $j <= 8; $j++) { 
		if ($i+$j==$j || $i*1==8 || $i*1==4 || $i*0==$j&&$i<4 || $j==8&&$i>=4) {
			echo " *";
		}else {
			echo " -";
		}
	}
	echo "\n";
}

?>