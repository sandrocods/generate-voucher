<?php
function generateRandomString($length = 10) {
	$characters = '1234567890QWERTYUIOPASDFGHJKLZXCVBNM';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
echo "Auto Generate Voucher Code | Code by Sandro.putraa\n";
echo "Prefix : ";
$depan = trim(fgets(STDIN));
echo "Random String length : ";
$berapa = trim(fgets(STDIN));
echo "Suffix : ";
$akhir = trim(fgets(STDIN));
echo "Jumlah Generate : ";
$jum = trim(fgets(STDIN));
echo "\n";
for ($i=0; $i <$jum ; $i++) { 
	echo $result = "".$depan."".generateRandomString($berapa)."".$akhir." \n";
	$fp = fopen('hasil.txt', 'a');
	fwrite($fp, $result);
	fclose($fp);
}
echo "\n".$i." Voucher Code Successfully Generated\n";
