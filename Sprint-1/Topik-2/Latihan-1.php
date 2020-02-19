<?php 

	echo "Mesukkan Nilai Panjang: ";

	$p = (int) fgets(STDIN);

	echo "Masukkan Nilai Lebar: ";

	$l = (int) fgets(STDIN);

	$hasil = $p * $l ;

	echo "Hasilnya = $hasil" . "\n";

?>