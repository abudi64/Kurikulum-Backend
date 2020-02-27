<?php  

for ($i=0; $i <= 9; $i++) {
	for ($j=0; $j<=9; $j++) {
		if ($i*1==$i) {
			echo "+-";
		}
	}
	echo "\n";
}

echo "\n";

for ($i=0; $i <= 9; $i++) {
	for ($j=0; $j<=9; $j++) {
		if ($i%2==1) {
			echo "+";
		} elseif ($i%2==0) {
			echo "-";				}
		}
		echo "\n";
	}


	echo "\n";

	for ($i=0; $i <= 8; $i++) {
		for ($j=0; $j<=8; $j++) {
			if ($i==$j) {
				echo " $i";
			}else {
				echo " -";
			}
		}
		echo "\n";
	}

	?>