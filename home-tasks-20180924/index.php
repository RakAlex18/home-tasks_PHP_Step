<?php

$var = true;
	
	if ($var) {
		echo 'Верно'."<br>";
	} else {
		echo 'Неверно'."<br>";
	}
	
$a = 5;
	if ($a > 0 and $a < 5) {
		echo 'Верно'."<br>";
	} else {
		echo 'Неверно'."<br>";
	}
	
$num = 2;
	
	switch ($num) {
		case 1:
			$result = 'зима';
		break;
		case 2:
			$result = 'весна';
		break;
		case 3:
			$result = 'лето';
		break;
		case 4:
			$result = 'осень';
		break;
	}

	echo $result."<br>";
	
$month = 6;
	
	if ($month == 12 or $month == 1 or $month == 2) {
		$result1 = 'Зима';
	}
	if ($month >= 3 and $month <= 5) {
		$result1 = 'Весна';
	}
	if ($month >= 6 and $month <= 8) {
		$result1 = 'Лето';
	}
	if ($month >= 9 and $month <= 11) {
		$result1 = 'Осень';
	}

	echo $result1."<br>";
	
	$arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $elem) {
		echo $elem.'<br>'; 
	}
	
	$i = -2;
	while ($i <= 5) {
		echo $i.'<br>';
		$i++;
	}
	for ($i = -2; $i <= 5; $i++) {
		echo $i.'<br>';
	}
	
	$arr1 = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
	foreach ($arr1 as $key=>$elem) {
		$en[] = $key;
		$ru[] = $elem;
	}
	
	var_dump($en);
	var_dump($ru);
?>