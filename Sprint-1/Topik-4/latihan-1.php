<?php  

echo "Masukkan Jumlah:";
$input = fgets(STDIN);

for ($i=0; $i < $input; $i++) { 
	echo "Masukkan Nilai Santri: ";
	$nilai = fgets(STDIN);

	$array[] = $nilai;
}

//ARRAY
// // array(5,9,6,7,9,8,10,7,8);
// [
// 	"0" =>"$nilai"
// ];
// echo "Nilai Santri:" . "\n";
print_r($array);

// foreach ($array as $key) {
// 	echo $key;
// }


echo "\n";

//MEAN
$c = count($array);
// $rata_rata = array_sum($array) / $input;
// echo "Nilai Rata rata = $rata_rata" . "\n";

$rata_rata = array_sum($array) / $c;
echo "NILAI RATA RATA = $rata_rata" . "\n";

echo "\n";

//MEDIAN
sort($array);

$d=$c/2;
if(gettype($d)=='double'){
	$d=floor($d);
	$med=$array[$d];
}else{
	$d=floor($d);
	$d1=round($d);
	$med=($array[$d]+$array[$d1])/2;
}
echo "MEDIANNYA = $med " . "\n";

// echo "\n";

//MODUS
$a=array_count_values($array);
foreach ($a as $key => $val) {
	if($val==max($a)){
		echo "MODUSNYA ADALAH [" . trim($key). "] dengan banyak data $val" ;
	}
}

echo "\n";

//NILAI TERBESAR DAN TERKECIL

$max = max($array);
$min = min($array);
echo "Urutan Nilai dari yg terkecil" . " :" . " ";
for ($i=0; $i < count($array); $i++) { 
	echo $array[$i] . ' '; 
}
echo "\n";

echo "nilai terbesar: " . "$max" . "\n";
echo "Nilai terkecil: " . "$min" . "\n";

echo "\n";
?>