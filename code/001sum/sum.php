<?php
$n = 3;
for($i = 1; $i <= $n; $i++){
	$kvr = pow($i, $i);
	$sum += $kvr;
	echo  "$i <sup>$i</sup> = ".$kvr."<br/>";
}
echo "Сумма всех чисел = ".$sum;
$sum=0;
?>