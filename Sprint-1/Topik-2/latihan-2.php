<?php  

	echo "Masukkan diameter lingkaran (dalam cm): ";

	$d = (int) fgets(STDIN);

	$phi = 3.14;

	$hasil_keliling = $d * $phi;

	$jari = $d / 2;

	$hasil_luas = $jari * $jari * $phi;

	echo "Hasil Keliling = $hasil_keliling cm" . "\n";

	echo "Hasil Luas = $hasil_luas cm" . "\n";


?>