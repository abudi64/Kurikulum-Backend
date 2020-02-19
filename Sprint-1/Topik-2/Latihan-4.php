<?php
echo "Masukkan Angka Kelipatan: ";
	$n = (int) fgets(STDIN);
echo "Masukkan Angka Maksimum kelipatan: ";
	$y = (int) fgets(STDIN);
    for($r=1; $r<$y; $r++){
        if(is_int($r/$n)){
            echo "$r, ";
        }
    } echo "\n";
?>