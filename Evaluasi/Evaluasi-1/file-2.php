<?php  

echo "Masukkan Pola 1: ";
	$p1=(string)fgets(STDIN);

echo "Masukkan Pola 2: ";
	$p2=(string)fgets(STDIN);

echo "Masukkan angka 1-9: ";
	$a=(int)fgets(STDIN);

for ($i=0; $i <= $a; $i++) {
	for ($j=0; $j<=	$a; $j++) {
			echo $p1 . $p2;

	}
	echo "\n";
}

?>